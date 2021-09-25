<template>
    <span class="badge bg-danger">{{ viewsNubmer }} <i class="far fa-eye"></i></span>
</template>

<script>
export default {
    computed:{
        viewsNubmer() {
            return this.$store.getters['article/articleViews']
        },
    },
    mounted() {
        console.log('Component views mounted.')
    }
}
</script>

<style scoped>
</style>
