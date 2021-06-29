<template>
  <div class="mt-14 md:mt-0">
    <nav-bar :isDarkMode="isDarkMode"></nav-bar>
    <div
      class="md:pl-24 md:pt-16 h-full md:pb-3 pb-20 duration-500"
      :class="isDarkMode ? 'bg-gray-800 text-white' : 'bg-gray-50'"
    >
      <div class="container p-5 md:pl-0 mt-5">
        <div
          class="shadow overflow-hidden rounded-lg w-11/12 mx-auto"
          :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
        >
          <div class="px-4 py-5 sm:px-6">
            <h3
              class="text-lg leading-6 font-medium"
              :class="isDarkMode ? 'bg-gray-900 text-white' : 'text-gray-900'"
            >
              Client Information
            </h3>
            <p
              class="mt-1 max-w-2xl text-sm"
              :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
            >
              Personal details and Packet.
            </p>
          </div>
          <div
            class="border-t"
            :class="isDarkMode ? 'border-gray-500' : 'border-gray-200'"
          >
            <dl>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-800' : 'bg-gray-100'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  Nama
                </dt>
                <dd
                  class="mt-1 text-sm sm:mt-0 sm:col-span-2"
                  :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                >
                  {{ userDetail.nama }}
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  Jasa
                </dt>
                <dd
                  class="mt-1 text-sm sm:mt-0 sm:col-span-2"
                  :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                >
                  {{ userDetail.jasa }}
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-800' : 'bg-gray-100'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  Nomor Telepon
                </dt>
                <dd
                  class="mt-1 text-sm sm:mt-0 sm:col-span-2"
                  :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                >
                  {{ userDetail.no_telp }}
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  Status
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  <p v-if="userDetail.status === 'deal'" class="text-green-500">
                    {{ userDetail.status }}
                  </p>
                  <p v-else class="text-red-500">
                    {{ userDetail.status }}
                  </p>
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-800' : 'bg-gray-100'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  Tanggal
                </dt>
                <dd
                  class="mt-1 text-sm sm:mt-0 sm:col-span-2"
                  :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                >
                  {{ setTanggal(userDetail.tanggal) }}
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  No Invoice
                </dt>
                <dd
                  class="mt-1 text-sm sm:mt-0 sm:col-span-2"
                  :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                >
                  {{ userDetail.no_invoice }}
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-800' : 'bg-gray-100'"
              >
                <dt
                  class="text-sm font-medium"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  Briefing
                </dt>
                <dd
                  class="mt-1 text-smsm:mt-0 sm:col-span-2"
                  :class="isDarkMode ? 'text-white' : 'text-gray-900'"
                >
                  {{ userDetail.brief }}
                </dd>
              </div>
              <div
                class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
              >
                <dt
                  class="text-sm font-medium mt-3"
                  :class="isDarkMode ? 'text-gray-400' : 'text-gray-600'"
                >
                  File
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  <ul
                    class="border rounded-md divide-y"
                    :class="
                      isDarkMode
                        ? 'border-gray-400 divide-gray-400'
                        : 'border-gray-200 divide-gray-200'
                    "
                  >
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="flex-shrink-0 h-5 w-5 text-gray-400"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                          />
                        </svg>
                        <span
                          class="ml-2 flex-1 w-0 truncate"
                          :class="isDarkMode ? 'text-white' : ''"
                        >
                          {{ userDetail.upload }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          href="#"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                          Download
                        </a>
                      </div>
                    </li>
                  </ul>
                </dd>
              </div>
            </dl>
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
        <h1 class="font-semibold text-lg">Edit</h1>
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
  </div>
</template>

<script>
import moment from "moment";
import NavBar from "../components/Navbar.vue";

export default {
  name: "UserDetail",
  components: {
    NavBar,
  },
  props: ["isDarkMode"],
  data() {
    return {
      userDetail: {},
    };
  },
  methods: {
    setTanggal(data) {
      moment.locale("id");
      const date = moment(data).format("LL");

      return date;
    },
  },
  mounted() {
    axios("/api/client/" + this.$route.params.id)
      .then((response) => {
        this.userDetail = response.data.data;
        // console.log(this.userDetail);
      })
      .catch((error) => console.log(error));
  },
};
</script>
