<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/vuesax/dist/vuesax.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div id="app">
    <vs-button vs-type="filled">Hello World</vs-button>
    <div class="center content-inputs">
      <vs-input
        primary
        v-model="value"
        placeholder="Primary" />

      <vs-input
        success
        v-model="value2"
        placeholder="Success" />

      <vs-input
        danger
        v-model="value3"
        placeholder="Danger" />

      <vs-input
        warn
        v-model="value4"
        placeholder="Warn" />

      <vs-input
        dark
        v-model="value5"
        placeholder="Dark" />

      <vs-input
        color="#7d33ff"
        v-model="value6"
        placeholder="HEX" />

      <vs-input
        color="rgb(59,222,200)"
        v-model="value7"
        placeholder="HEX" />
    </div>

      
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuesax/dist/vuesax.umd.js"></script>
  <script>
    new Vue({
      el: '#app'
    })
  </script>
</body>
</html>