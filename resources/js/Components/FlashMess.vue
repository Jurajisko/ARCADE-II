<template>

    <transition name="fade">

        <div class="notification is-success" v-show="visible">
            <button class="delete" @click="hide"></button>
            {{ text }}
        </div>

    </transition>

</template>


<script>

    export default {

        props: ["text"],

        data() {
            return {
                visible: false
            };
        },

        created () {
            if ( this.text ) {
                this.show();
            }
        },

        methods: {
            show() {
                this.visible = true;
                setTimeout( () => this.hide(), 3000 );
            },

            hide() {
                this.visible = false;
            },
        },
    }
</script>

<style lang="scss" scoped>

    .notification {
        font-size: 1.2rem;
        position: fixed;
        left: 2em;
        bottom: 2em;
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity .5s;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }

</style>