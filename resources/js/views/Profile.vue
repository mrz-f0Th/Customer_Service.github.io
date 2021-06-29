<!-- This example requires Tailwind CSS v2.0+
<template>
  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        CS Information
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Personal details and Account.
      </p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div
          class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
        >
          <dt class="text-sm font-medium text-gray-500">Full name</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{user.name}}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Application for</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{user.email}}
          </dd>
        </div>
      </dl>
    </div>
  </div>
</template>
-->


// <script>
// export default {
//   components: {},
//   data() {
//     return {
//       user: "",
//     };
//   },
//   beforeMount() {
//     axios.defaults.headers.common["Content-Type"] = "application/json";
//     axios.defaults.headers.common["Authorization"] =
//       "Bearer " + localStorage.getItem("jwt");

//     axios
//       .get(`api/users/${this.$route.params.userId}`)
//       .then((response) => {
//         this.user = response.data;
//       })
//       .catch((error) => {
//         console.error(error);
//       });
//   },
// };
//
</script>
