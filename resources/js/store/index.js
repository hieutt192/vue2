import Vue from 'vue'
import Vuex from 'vuex'
import auth from '@/store/auth.js'


Vue.use(Vuex)
export default new Vuex.Store({
  modules: {
    // todo: moduleTodo
    auth,


  }
})