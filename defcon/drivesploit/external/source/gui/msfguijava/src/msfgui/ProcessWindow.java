
package msfgui;

import java.io.IOException;
import java.io.InputStreamReader;

/**
 *
 * @author scriptjunkie
 */
public class ProcessWindow extends MsfFrame {
	private final InputStreamReader[] streams;

    /** Creates new form ProcessWindow */
    public ProcessWindow(Process proc) {
        initComponents();
		streams = new InputStreamReader[2];
		streams[0] = new InputStreamReader(proc.getInputStream());
		streams[1] = new InputStreamReader(proc.getErrorStream());
		for(int i = 0; i < 2; i++){
			final InputStreamReader stream = streams[i];
			new Thread(){
				public void run(){
					try{
						char[] cbuf = new char[1000];
						int read;
						while ((read = stream.read(cbuf)) != -1)
							outputPane.append(new String(cbuf,0,read));
						if(read == -1)
							outputField.setText("Completed");
					}catch(IOException iox){
						outputField.setText("Done");
					}
				}
			}.start();
		}
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        outputField = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        outputPane = new javax.swing.JTextArea();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);

        org.jdesktop.application.ResourceMap resourceMap = org.jdesktop.application.Application.getInstance(msfgui.MsfguiApp.class).getContext().getResourceMap(ProcessWindow.class);
        outputField.setText(resourceMap.getString("outputField.text")); // NOI18N
        outputField.setName("outputField"); // NOI18N

        outputPane.setEditable(false);
        jScrollPane1.setViewportView(outputPane);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 538, Short.MAX_VALUE)
                    .addComponent(outputField))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(outputField)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 308, Short.MAX_VALUE)
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JLabel outputField;
    private javax.swing.JTextArea outputPane;
    // End of variables declaration//GEN-END:variables
}