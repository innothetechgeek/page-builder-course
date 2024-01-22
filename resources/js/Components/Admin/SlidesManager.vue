<script>
 import Uploader from "vue-media-upload";

export default{

    components:{
        Uploader,
    }
   
}


</script>

<template>
    <div>
       <Uploader server="sections/uploadsliderimage" />
    </div>
</template>
<style scoped>
::v-deep .mu-plus-icon{
    color: #FCB322 !important;
}
/*  */
</style>