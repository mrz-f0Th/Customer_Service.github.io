<template>
  <div class="w-full flex justify-between items-center px-10 my-4">
    <div>
      <h1 class="font-semibold">{{ user.nama }}</h1>
      <div v-if="user.status.length === 4">
        <p class="text-sm text-green-500">{{ user.status }}</p>
      </div>
      <p v-else class="text-sm text-red-500">{{ user.status }}</p>
    </div>
    <div>
      <p>{{ setTanggal(user.tanggal) }}</p>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  name: "ListCustomer",
  props: ["user"],
  methods: {
    setTanggal(data) {
      moment.locale("id");
      const date = moment(data).format("LL");

      return date;
    },
  },
};
</script>

<style>
</style>
