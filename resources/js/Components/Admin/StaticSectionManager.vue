<template>
    <div class="content-wrapper">
        <a target="_blank" :href="'page/liveedit/'+section.id" class="btn btn-secondary" v-if="section.content==''">
            <font-awesome-icon icon="fa-solid fa-plus" />
            Add content
        </a>
        <a target="_blank" :href="'page/liveedit/'+section.id" class="btn btn-secondary" v-else>
            <font-awesome-icon icon="fa-solid fa-eye" />
            Edit content
        </a>
    </div>
</template>
<script>

export default{

    props: ['section']

}
</script>

<style scoped>

    .content-wrapper{
        padding-top:25px;
    }

    .btn-secondary{
        background-color:#FCB322;
        color: #fff;
    }
</style>
