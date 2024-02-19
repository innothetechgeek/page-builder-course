<script setup>

    import FrontendLayout from '@/Components/frontend/FrontendLayout.vue';
    import StaticContent from '@/Components/frontend/StaticContent.vue';
    import Slider from '@/Components/frontend/Slider.vue'

    const props = defineProps(
        {
            menu_items: Array,
            page_sections: Array,

        }
    );

</script>

<template>
 
  <FrontendLayout :menuItems="menu_items">

    <div class="content-wrapp" v-for="page_section in  page_sections" :key="page_section.id">

      <StaticContent v-if="page_section.content_type == 'static content'" :content="page_section.content" ></StaticContent>

      <Slider v-if="page_section.content_type == 'slider'" :slides="page_section.slides"></Slider>

    </div>
    

  </FrontendLayout>

</template>

<style> 

  .nav-item a{

    color: black !important;
    z-index: 50000;
  }

</style>