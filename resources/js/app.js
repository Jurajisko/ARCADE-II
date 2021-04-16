require('./bootstrap');

require('alpinejs');

//import { createApp } from 'vue/dist/vue.esm-bundler.js';
import { createApp } from 'vue';

import ExampleComponent from './Components/ExampleComponent.vue';
import FlashMess from './Components/FlashMess.vue';
import CommentBase from './Components/CommentBase.vue';
import CommentMessage from './Components/CommentMessage.vue';

createApp({
    components: {
        ExampleComponent,
        FlashMess,
        CommentBase,
        CommentMessage,
    }
}).mount('#app')