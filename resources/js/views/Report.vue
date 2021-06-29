<template>
  <div>
    <nav-bar :isDarkMode="isDarkMode"></nav-bar>
    <div
      class="md:pl-24 md:pt-16 h-full duration-500"
      :class="isDarkMode ? 'bg-gray-800' : 'bg-gray-50'"
    >
      <div class="container md:p-5 md:pl-0 md:mt-5 py-20 md:pt-5 md:pb-5">
        <div class="flex flex-wrap justify-end md:justify-between mb-5 w-full">
          <div class="flex justify-center mx-5 md:w-1/3 w-full mb-3 md:mb-0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="
                h-11
                w-6
                rounded-l-md
                p-1
                bg-blue-50
                border border-r-0
                text-gray-400
              "
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
            <input
              v-model="search"
              @keyup="searchCustomer"
              type="text"
              placeholder="search"
              class="
                border-gray-200 border border-l-0
                rounded-l-none rounded-md
                w-full
                bg-blue-50
                p-2
                focus:outline-none
              "
            />
          </div>
          <div
            class="
              flex
              relative
              shadow
              rounded-full
              justify-center
              items-center
              cursor-pointer
              w-1/3
              md:w-auto
              mr-5
              p-1
            "
            :class="isDarkMode ? 'bg-gray-800' : 'bg-white'"
            @click="
              {
                isActive = !isActive;
                rangeClient();
              }
            "
            :aria-pressed="isActive ? 'true' : 'false'"
          >
            <p
              class="
                ml-1
                px-3
                rounded-full
                select-none
                transition-colors
                text-xs
                md:text-sm
                md:py-1.5
                text-center
              "
              :class="isActive ? 'bg-indigo-600 text-white' : 'text-indigo-700'"
            >
              All time
            </p>
            <p
              class="
                rounded-full
                px-3
                mr-1
                select-none
                transition-colors
                text-xs
                md:text-sm
                md:py-1.5
                text-center
              "
              :class="
                !isActive ? 'bg-indigo-600 text-white' : 'text-indigo-700'
              "
            >
              Last Month
            </p>
          </div>
        </div>
        <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-4">
            <div
              class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
            >
              <div
                class="
                  shadow
                  overflow-hidden
                  border-b border-gray-300
                  rounded-lg
                "
                :class="isDarkMode ? 'border-gray-500' : 'border-gray-300'"
              >
                <table class="min-w-full divide-y">
                  <thead
                    class=""
                    :class="
                      isDarkMode
                        ? 'bg-gray-900 divide-gray-300'
                        : 'bg-gray-100 divide-gray-200'
                    "
                  >
                    <tr>
                      <th
                        scope="col"
                        class="
                          px-3
                          md:px-6
                          py-3
                          text-left text-xs
                          font-medium
                          uppercase
                          tracking-wider
                        "
                        :class="isDarkMode ? 'text-white' : 'text-gray-500'"
                      >
                        Nama
                      </th>
                      <th
                        scope="col"
                        class="
                          px-1
                          md:px-6
                          py-3
                          text-left text-xs
                          font-medium
                          uppercase
                          tracking-wider
                        "
                        :class="isDarkMode ? 'text-white' : 'text-gray-500'"
                      >
                        Jasa
                      </th>
                      <th
                        scope="col"
                        class="
                          px-1
                          md:px-6
                          py-3
                          text-left text-xs
                          font-medium
                          uppercase
                          tracking-wider
                        "
                        :class="isDarkMode ? 'text-white' : 'text-gray-500'"
                      >
                        Status
                      </th>
                      <th
                        scope="col"
                        class="
                          px-1
                          md:px-6
                          py-3
                          text-left text-xs
                          font-medium
                          uppercase
                          tracking-wider
                        "
                        :class="isDarkMode ? 'text-white' : 'text-gray-500'"
                      >
                        No Telp
                      </th>
                      <th
                        scope="col"
                        class="
                          relative
                          px-2
                          md:px-6
                          py-3
                          text-center text-xs
                          font-medium
                          uppercase
                          tracking-wider
                        "
                        :class="isDarkMode ? 'text-white' : 'text-gray-500'"
                      >
                        Aksi
                      </th>
                    </tr>
                  </thead>
                  <tbody
                    class="divide-y transition-opacity"
                    :class="
                      isDarkMode
                        ? 'bg-gray-700 divide-gray-900'
                        : 'bg-white divide-gray-200'
                    "
                  >
                    <tr v-for="person in user" :key="person.id">
                      <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="ml-0">
                            <div
                              class="text-sm font-medium"
                              :class="
                                isDarkMode ? 'text-white' : 'text-gray-900'
                              "
                            >
                              {{ person.nama }}
                            </div>
                            <div
                              class="text-xs md:text-sm"
                              :class="
                                isDarkMode ? 'text-gray-100' : 'text-gray-500'
                              "
                            >
                              {{ setTanggal(person.tanggal) }}
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="px-1 md:px-6 py-4 whitespace-nowrap">
                        <div
                          class="text-sm"
                          :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                        >
                          {{ person.jasa }}
                        </div>
                      </td>
                      <td class="px-1 md:px-6 py-4 whitespace-nowrap">
                        <span
                          v-if="person.status.length === 4"
                          class="
                            px-2
                            inline-flex
                            text-xs
                            leading-5
                            font-semibold
                            rounded-full
                            bg-green-100
                            text-green-800
                          "
                        >
                          {{ person.status }}
                        </span>
                        <span
                          v-else
                          class="
                            px-2
                            inline-flex
                            text-xs
                            leading-5
                            font-semibold
                            rounded-full
                            bg-red-100
                            text-red-800
                          "
                          >{{ person.status }}</span
                        >
                      </td>
                      <td
                        class="px-1 md:px-6 py-4 whitespace-nowrap"
                        :class="isDarkMode ? 'text-gray-100' : 'text-gray-500'"
                      >
                        {{ person.no_telp }}
                      </td>
                      <td
                        class="
                          px-1
                          md:px-6
                          py-4
                          whitespace-nowrap
                          text-right text-sm
                          font-medium
                          flex
                          items-center
                          justify-around
                        "
                      >
                        <router-link
                          :to="'/report/update/' + person.id"
                          class="px-2"
                          :class="
                            isDarkMode
                              ? 'text-white hover:text-indigo-400'
                              : 'text-indigo-600 hover:text-indigo-900'
                          "
                          >Edit</router-link
                        >
                        <router-link
                          :to="'/report/detail/' + person.id"
                          class="px-2"
                          :class="
                            isDarkMode
                              ? 'text-white hover:text-indigo-400'
                              : 'text-indigo-600 hover:text-indigo-900'
                          "
                          >Detail</router-link
                        >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6 cursor-pointer hover:text-red-600 mx-2"
                          :class="isDarkMode ? 'text-white' : ''"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          @click="deleteCustomer(person.id)"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                          />
                        </svg>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile -->
    <div
      class="
        md:hidden
        duration-500
        fixed
        top-0
        py-8
        px-5
        w-full
        z-100
        cursor-pointer
        mx-auto
        h-9
        flex
        justify-between
        items-center
      "
      :class="isDarkMode ? 'bg-gray-800 text-white' : 'bg-gray-50'"
      @click="isDarkMode = !isDarkMode"
      :aria-pressed="isDarkMode ? 'true' : 'false'"
    >
      <h1 class="font-semibold text-lg">Entry</h1>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          :class="isDarkMode ? 'hidden' : ''"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
        />
        <path
          :class="isDarkMode ? '' : 'hidden'"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
        />
      </svg>
    </div>
    <!-- Dekstop -->
    <div
      class="fixed bottom-5 left-0 z-100 cursor-pointer w-20 mx-auto h-9"
      @click="isDarkMode = !isDarkMode"
      :aria-pressed="isDarkMode ? 'true' : 'false'"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6 mx-auto"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          :class="isDarkMode ? 'hidden' : ''"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
        />
        <path
          :class="isDarkMode ? 'text-white' : 'hidden'"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
        />
      </svg>
    </div>
  </div>
</template>

<script>
import moment from "moment";
import NavBar from "../components/Navbar.vue";

export default {
  name: "Report",
  components: {
    NavBar,
  },
  data() {
    return {
      user: [],
      search: "",
      isActive: true,
    };
  },
  props: ["isDarkMode"],
  methods: {
    setUser(data) {
      this.user = data;
    },
    setTanggal(data) {
      moment.locale("id");
      const date = moment(data).format("LL");

      return date;
    },
    searchCustomer() {
      if (this.search.length === 0) {
        axios
          .get("/api/client")
          .then((response) => {
            this.setUser(response.data.data);
          })
          .catch((err) => console.log(err));
      }
      axios
        .get("/api/client/search/" + this.search)
        .then((response) => {
          this.setUser(response.data.data);
        })
        .catch((err) => console.log(err));
    },
    deleteCustomer(id) {
      axios
        .delete("/api/client/" + id)
        .then(() => {
          this.$toast.success("Berhasil Menghapus Keranjang", {
            // optional options Object
            position: "top-right",
          });
          axios
            .get("/api/client")
            .then((response) => {
              const data = response.data.data;

              this.setUser(data);
            })
            .catch((err) => console.log(err));
        })
        .catch(() => {
          this.$toast.error("Data gagal dihapus :(", {
            // optional options Object
            position: "top-right",
          });
        });
    },
    rangeClient() {
      if (this.isActive) {
        axios
          .get("/api/client")
          .then((response) => {
            const data = response.data.data;

            this.setUser(data);
          })
          .catch((err) => console.log(err));
      }
      if (!this.isActive) {
        axios
          .get("/api/baru")
          .then((response) => {
            const data = response.data.data;

            this.setUser(data);
          })
          .catch((err) => console.log(err));
      }
    },
  },
  mounted() {
    axios
      .get("/api/client")
      .then((response) => {
        const data = response.data.data;

        this.setUser(data);
        this.rangeClient;
      })
      .catch((err) => console.log(err));
  },
};
</script>
