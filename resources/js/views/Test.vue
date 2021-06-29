<template>
  <div class="container ml-28">
    <h1>Test</h1>
  </div>
</template>

<script>
import axios from "axios";

export default {
  mounted() {
    axios
      .get("/api/client")
      .then((response) => console.log(response))
      .catch((err) => console.log(err));
  },
};
</script>
