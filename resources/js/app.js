import './bootstrap';
import '../sass/app.scss'

import Vue from 'vue'
 import router from './router';
 import Vuesax from 'vuesax';
//  import 'material-icons/iconfont/material-icons.css';
 import 'vuesax/dist/vuesax.css';
 import App from './App.vue';
 import store from './store'
 Vue.config.productionTip = false;
 Vue.use(Vuesax, {});
 new Vue({
    router,
    store,
    render: h => h(App)
  }).$mount('#app')