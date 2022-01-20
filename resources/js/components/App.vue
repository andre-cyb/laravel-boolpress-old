<template>
  <div>
    <header>
      <div class="title"></div>
      <h1 class="text">{{ title }}</h1>
      <h1 class="text">Non fare caso alla grafica scadente</h1>
    </header>

    <main></main>

    <footer></footer>
  </div>
</template>
<script>
export default {
  name: "app",
  data() {
    return {
      title: "Ciao e Benvenuto nel blog di Boolean",
    };
  },
};
</script>
<style scoped>
.title {
  background-image: url("https://images.unsplash.com/photo-1508739773434-c26b3d09e071?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
  background-size: cover;
  background-position: center;
  height: 500px;
}
.text {
  text-align: center;
}
</style>
