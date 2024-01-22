<template>
  <div id="editor">

  </div>
</template>

<script>

import 'grapesjs/dist/css/grapes.min.css';
import grapesjs from 'grapesjs';

import '../../css/editor/editor-styles.css';

export default{
  
    props: {content: String,blocks: Array},

    methods:{

        initializeGrapeJsEditor(){


            grapesjs.init({
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



        }
        
      
    },

    mounted(){

        this.initializeGrapeJsEditor();
        this.applyStyles();
    
    
    }

}
</script>
