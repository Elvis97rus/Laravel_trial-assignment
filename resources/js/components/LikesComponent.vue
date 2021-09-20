<template>
    <span @click="addLike()" class="badge likesButton" :class="(isLike) ? 'bg-primary': 'bg-danger'">{{ articleLikes }} <i class="far fa-thumbs-up"></i></span>
</template>

<script>

export default {
    computed:{
        isLike() {
            return this.$store.state.likeIt
        },
        articleLikes() {
            return this.$store.getters.articleLikes
        },
    },
    methods: {
        addLike() {
            this.$store.dispatch('addLike', {
                slug: this.$store.state.slug,
                increment: this.isLike,
            })
        },
    },
    mounted() {
        console.log('Component views mounted.')
    }
}
</script>

<style scoped>
    .likesButton {
        cursor: pointer;
    }
</style>
