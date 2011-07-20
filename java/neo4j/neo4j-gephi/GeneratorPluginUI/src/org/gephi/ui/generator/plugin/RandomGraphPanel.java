/*
Copyright 2008 WebAtlas
Authors : Mathieu Bastian, Mathieu Jacomy, Julian Bilcke
Website : http://www.gephi.org

This file is part of Gephi.

Gephi is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Gephi is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Gephi.  If not, see <http://www.gnu.org/licenses/>.
 */

package org.gephi.ui.generator.plugin;

import org.gephi.lib.validation.BetweenZeroAndOneValidator;
import org.gephi.lib.validation.PositiveNumberValidator;
import org.netbeans.validation.api.builtin.Validators;
import org.netbeans.validation.api.ui.ValidationGroup;
import org.netbeans.validation.api.ui.ValidationPanel;

/**
 *
 * @author Mathieu Bastian
 */
public class RandomGraphPanel extends javax.swing.JPanel {

    /** Creates new form RandomGraphPanel */
    public RandomGraphPanel() {
        initComponents();
    }

    public static ValidationPanel createValidationPanel(RandomGraphPanel innerPanel) {
        ValidationPanel validationPanel = new ValidationPanel();
        if (innerPanel == null) {
            innerPanel = new RandomGraphPanel();
        }
        validationPanel.setInnerComponent(innerPanel);

        ValidationGroup group = validationPanel.getValidationGroup();

        //Node field
        group.add(innerPanel.nodeField, Validators.REQUIRE_NON_EMPTY_STRING,
                new PositiveNumberValidator());

        //Edge field
        group.add(innerPanel.edgeField, Validators.REQUIRE_NON_EMPTY_STRING,
                new BetweenZeroAndOneValidator());

        return validationPanel;
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        nodeLabel = new javax.swing.JLabel();
        edgeLabel = new javax.swing.JLabel();
        nodeField = new javax.swing.JTextField();
        edgeField = new javax.swing.JTextField();

        nodeLabel.setText(org.openide.util.NbBundle.getMessage(RandomGraphPanel.class, "RandomGraphPanel.nodeLabel.text")); // NOI18N

        edgeLabel.setText(org.openide.util.NbBundle.getMessage(RandomGraphPanel.class, "RandomGraphPanel.edgeLabel.text")); // NOI18N

        nodeField.setText(org.openide.util.NbBundle.getMessage(RandomGraphPanel.class, "RandomGraphPanel.nodeField.text")); // NOI18N

        edgeField.setText(org.openide.util.NbBundle.getMessage(RandomGraphPanel.class, "RandomGraphPanel.edgeField.text")); // NOI18N

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(20, Short.MAX_VALUE)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(nodeLabel)
                    .addComponent(edgeLabel))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(edgeField)
                    .addComponent(nodeField, javax.swing.GroupLayout.DEFAULT_SIZE, 109, Short.MAX_VALUE))
                .addContainerGap(19, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(20, 20, 20)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(nodeField, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(nodeLabel))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(edgeField, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(edgeLabel))
                .addContainerGap(28, Short.MAX_VALUE))
        );
    }// </editor-fold>//GEN-END:initComponents
    // Variables declaration - do not modify//GEN-BEGIN:variables
    protected javax.swing.JTextField edgeField;
    private javax.swing.JLabel edgeLabel;
    protected javax.swing.JTextField nodeField;
    private javax.swing.JLabel nodeLabel;
    // End of variables declaration//GEN-END:variables
}
