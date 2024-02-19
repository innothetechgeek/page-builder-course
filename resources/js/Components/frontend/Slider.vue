<template>
  <div>
    
  </div>
    <carousel>
      <slide v-for="slide in slides" :key="slide">
      
        <div class="carousel_item" :style="{background: `url('storage/slides/${slide.image}')` }">

        </div>

        <div class="banner-info">
          <div class="content">

            <h5>Cooking is easy</h5>
            <h3 class="mt-2 mb-5">Passion for cooking</h3>
            <p> Helping you to be chef at your own house</p>

            <a href="about.html" class="btn btn-style mt-4">Learn More</a>

          </div>

        </div>


      </slide>
  
      <template #addons>
        <navigation />
        <pagination />
      </template>

    


    </carousel>
  </template>

<script setup>

     import 'vue3-carousel/dist/carousel.css';

     import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

     defineProps({
      slides : Array
     })

</script>

<style scoped>
    .carousel_item{

        min-height: 800px;
        width: 100%;
        background-color: var(--vc-clr-primary);
        color: var(--vc-clr-white);
        display: block;
    
    }

    .banner-info{
      width:100%;
      min-height: 800px;
      justify-content: center;
      position:absolute;
      align-items: center;
      display:flex;
      top:12px;
      color:#fff;
    }

    .content{
      text-align: center;
    }


</style>