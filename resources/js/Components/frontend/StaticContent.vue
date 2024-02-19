<template>
    <span v-html="content"></span>
</template>

<script setup>

     defineProps(
        {
            content: String
        }
     )

</script>