<script> 
import SlidesManager from '@/Components/Admin/SlidesManager.vue';

import StaticSectionManager from '@/Components/Admin/StaticSectionManager.vue'

export default{

  data() {

    return{
      isPanelActive: false,
    }
  },

  methods: {
    togglePanel(){
      this.isPanelActive = !this.isPanelActive;
    }
  },

  components:{
    SlidesManager,
    StaticSectionManager
  },

  props: ['section']


}
</script>
<template>
    <div @click="togglePanel()" class="accordion section-title">
         {{  section.title }}
        <font-awesome-icon icon="fa-plus"></font-awesome-icon>  
    </div>
    <div class="panel" :class="{active:isPanelActive}">
        <div class="panel-content">
          
          <SlidesManager v-if="section.contentType=='slides'" ></SlidesManager>

          <StaticSectionManager v-if="section.contentType=='static'" :section="section" />

        </div>

        <div class="panel-footer">

            <div class="right-col">

            </div>
            <div class="left-col">
                <span class="delete-section">
                    <font-awesome-icon icon="fa-solid fa-trash"></font-awesome-icon>
                    Delete section
                </span>
                &nbsp; &nbsp;
                <span class="delete-section">
                   <font-awesome-icon class="fa-times" icon="fa-solid fa-times"></font-awesome-icon>
                    Deactivate section
                </span>
            </div>

        </div>

    </div>
</template>

<style scoped>

.active{
  display:block !important;
}
.panel-footer{
    margin-top:25px;
    border-top: 1px solid #F0BCB4;
    padding:15px;
    display:flex;
    justify-content: space-between;
}

:deep(.gallery[data-v-446c7bb4]) {
   border:none !important;
   border:none !important;
}

.p-button{
    background:red;
}

.cursor-pointer{
    cursor: pointer;
}

.fa-trash{
   color:#ff6c60;
}

.fa-times{
    color: #F0BCB4;
}

.section-footer button{

    margin-bottom:15px;

}

.mu-plusbox{
    width:150px !important;
}

::v-deep  .uploader .mu-plusbox{
    width:560px !important;
}

::v-deep  .uploader #mu-file-input{
    display: none !important;
}
.accordion {

    background-color: #ddede0 ! important;
    border-color: #ddede0 ! important;
    
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    margin-bottom:8px;

}

.accordion.active{
  background-color:#5d6368;;
  
}

.page-sections{
  padding:20px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}

.slider-images div{
  width:18%;
  margin-bottom:15px;
}

.slider-images .gallery{
   border:none !important;
}

.elements-wraper{
  border:none;
}
.slider-images{
  display: flex;
  justify-content: space-around;
  display: -webkit-box;  /* OLD - iOS 6-, Safari 3.1-6, BB7 */
  display: -ms-flexbox;  /* TWEENER - IE 10 */
  display: -webkit-flex; /* NEW - Safari 6.1+. iOS 7.1+, BB10 */
  display: flex;         /* NEW, Spec - Firefox, Chrome, Opera */
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  flex-wrap:wrap;
}

.section-title{
    font-weight: bold;
    display:flex;
    justify-content:space-between;
}

.slider-images{
    display: grid;
    grid-template-columns: auto auto auto auto;

   
}

.slider-images div img{
    width:150px;
}

</style>