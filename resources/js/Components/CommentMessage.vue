<template>
    <div>
        <p>{{ comments.length }} comments</p>

        <li v-for="comment in comments" :key="comment.id">
            {{ comment.text }}
            <button @click="comments.pop()">delete</button>
        </li>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                comments: [
                    {
                        id: 1,
                        text: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                    },
                    {
                        id: 2,
                        text: "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
                    },
                    {
                        id: 3,
                        text: "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. ",
                    }
                ]
            }
        },
        
    }
</script>

<style lang="scss" scoped>

</style>