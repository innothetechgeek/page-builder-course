<template>
  <div id="editor">

  </div>
</template>

<script>

import 'grapesjs/dist/css/grapes.min.css';
import grapesjs from 'grapesjs';

import '../../css/editor/editor-styles.css';

export default{
  
    props: {content: String,blocks: Array, section_id: Number},

    data(){

        return{
            editor: null,
        }
    },

    methods:{

        initializeGrapeJsEditor(){

            alert( this.content);
            
            this.editor =  grapesjs.init({
                container: '#editor',
                components:  this.content,
                blockManager: {
                    blocks: this.blocks,
                },
                storageManager: {
                    autoload:false,
                    storeHtml: 1,
                }

            })
        },

        applyStyles(){

            let styles = document.getElementsByTagName('head')[0].innerHTML;

            let iframe = document.getElementsByTagName('iframe')[0];

            let iframeHead = iframe.contentWindow.document.head;

            iframeHead.innerHTML =  styles;



        },

        addSaveButton(){

            this.editor.Panels.addButton('options',{

                id: 'save',
                className: 'fas fa-save',
                command: this.saveChanges,
                attributes: {title: 'Save Page'}
            })

        },

        saveChanges(){

            //alert('this is the save page method');
            let html = this.editor.getHtml();
            let css = this.editor.getCss();

            axios.post(route('section.save'),{

                sectionId: this.section_id,
                html: html,
                css: css,

            });
  

        }
        
      
    },

    mounted(){

        this.initializeGrapeJsEditor();
        this.applyStyles();
        this.addSaveButton();
    
    
    }

}
</script>
