#
#   Copyright 2011 Wade Alcorn wade@bindshell.net
#
#   Licensed under the Apache License, Version 2.0 (the "License");
#   you may not use this file except in compliance with the License.
#   You may obtain a copy of the License at
#
#       http://www.apache.org/licenses/LICENSE-2.0
#
#   Unless required by applicable law or agreed to in writing, software
#   distributed under the License is distributed on an "AS IS" BASIS,
#   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#   See the License for the specific language governing permissions and
#   limitations under the License.
#
class Link_rewrite < BeEF::Core::Command
  
  def initialize
    super({
      'Name' => 'Link Rewriter',
      'Description' => 'This module will rewrite the href attribute of all matched links.<br /><br />The jQuery selector field can be used to limit the selection of links. eg: a[href="http://www.bindshell.net"]. For more information please see: http://api.jquery.com/category/selectors/',
      'Category' => 'Browser',
      'Author' => ['passbe'],
      'Data' => [
        { 'ui_label'=>'URL', 'name'=>'url', 'value'=>'http://www.bindshell.net/', 'width'=>'200px' },
        { 'ui_label'=>'jQuery Selector', 'name'=>'selector', 'value'=>'a', 'width'=>'200px' }
      ],
      'File' => __FILE__
    })
    
    set_target({
      'verified_status' =>  VERIFIED_WORKING, 
      'browser_name' =>     ALL
    })
              
    use_template!
  end

  def callback
    save({'result' => @datastore['result']})
  end
  
end