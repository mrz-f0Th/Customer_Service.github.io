<template>
  <div
    class="container"
    :class="isDarkMode ? 'text-white bg-gray-900 min-h-screen' : 'bg-gray-50'"
  >
    <nav-bar :isDarkMode="isDarkMode"></nav-bar>
    <div
      class="md:pl-24 md:pt-16 h-full duration-500"
      :class="isDarkMode ? 'bg-gray-900' : 'bg-gray-50'"
    >
      <div class="container md:flex h-full mt-18 mb-7.5 pt-2">
        <section class="md:pl-5 pt-3 w-full md:w-3/4 md:pr-10">
          <div class="mb-2">
            <h1 class="font-semibold text-lg ml-5 md:ml-0">Dashboard</h1>
          </div>
          <div
            class="
              flex
              md:justify-between
              justify-center
              flex-row flex-wrap
              mt-7
              md:mt-0
              items-center
            "
          >
            <div
              class="py-10 pl-5 w-40 rounded-xl m-2.5"
              :class="
                isDarkMode
                  ? 'shadow-3xl bg-gray-800 text-white'
                  : 'shadow-xl bg-white'
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                />
              </svg>
              <h1 class="text-xl font-semibold mt-3">{{ users }}</h1>
              <p class="text-gray-400">Customer</p>
            </div>
            <div
              class="py-10 pl-5 w-40 rounded-xl m-2.5"
              :class="
                isDarkMode
                  ? 'shadow-3xl bg-gray-800 text-white'
                  : 'shadow-xl bg-white'
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                />
              </svg>
              <h1 class="text-xl font-semibold mt-3">{{ userDeal }}</h1>
              <p class="text-gray-400">Deal</p>
            </div>
            <div
              class="py-10 pl-5 w-40 rounded-xl m-2.5"
              :class="
                isDarkMode
                  ? 'shadow-3xl bg-gray-800 text-white'
                  : 'shadow-xl bg-white'
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
                />
              </svg>
              <h1 class="text-xl font-semibold mt-3">{{ userKonsul }}</h1>
              <p class="text-gray-400">Consultation</p>
            </div>
          </div>
          <div class="md:mt-4 mt-9">
            <div class="w-full flex justify-between mt-2 mb-1">
              <h1 class="ml-5 md:ml-0">Customer Deal</h1>
              <div
                class="
                  flex
                  relative
                  shadow
                  rounded-full
                  justify-center
                  items-center
                  cursor-pointer
                  ml-5
                  mr-5
                  md:mr-0
                  h-8
                  text-xs text-center
                "
                :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
                @click="
                  {
                    isActive = !isActive;
                    rangeChart();
                  }
                "
                :aria-pressed="isActive ? 'true' : 'false'"
              >
                <p
                  class="
                    ml-1
                    px-3
                    rounded-full
                    py-1
                    select-none
                    transition-colors
                  "
                  :class="
                    isActive ? 'bg-indigo-600 text-white' : 'text-indigo-600'
                  "
                >
                  30 Days
                </p>
                <p
                  class="
                    rounded-full
                    px-3
                    py-1
                    mr-1
                    select-none
                    transition-colors
                  "
                  :class="
                    !isActive ? 'bg-indigo-600 text-white' : 'text-indigo-600'
                  "
                >
                  7 Days
                </p>
              </div>
            </div>
            <div class="w-full">
              <line-chart
                download="dataClient"
                :data="arrDeal"
                :colors="[setColor()]"
              ></line-chart>
            </div>
          </div>
        </section>

        <!-- Section kanan -->
        <section
          class="
            mt-10
            md:mt-0
            p-1
            md:pt-3
            pt-5
            pb-20
            md:w-1/4
            md:fixed
            md:right-0
            h-full
            md:h-screen
            md:overflow-y-scroll
            border-b
          "
          :class="
            isDarkMode
              ? 'bg-gray-900 border-gray-500 text-white shadow-3xl md:border-t'
              : 'bg-white md:border-l border-gray-200'
          "
        >
          <div class="mx-auto">
            <div class="flex justify-center">
              <h1 class="font-semibold my-5">Customer</h1>
            </div>
            <div class="flex justify-center mx-auto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="
                  h-9
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
                  bg-blue-50
                  p-1
                  focus:outline-none
                "
              />
            </div>
          </div>
          <div v-for="user in listUsers" :key="user.id">
            <list-customer :user="user" :download="true"></list-customer>
          </div>
        </section>
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
      :class="isDarkMode ? 'bg-gray-900' : 'bg-gray-50'"
      @click="isDarkMode = !isDarkMode"
      :aria-pressed="isDarkMode ? 'true' : 'false'"
    >
      <h1 class="font-semibold text-lg">Dashboard</h1>
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
          :class="isDarkMode ? '' : 'hidden'"
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
import ListCustomer from "../components/ListCustomer.vue";
// import LineChart from "../components/LineChart.vue";
import moment from "moment";
import NavBar from "../components/Navbar.vue";

export default {
  name: "Home",
  components: {
    // LineChart,
    ListCustomer,
    NavBar,
  },
  props: ["isDarkMode"],
  data() {
    return {
      users: "",
      userDeal: "",
      userKonsul: "",
      listUsers: [],
      arrDeal: [],
      search: "",
      isActive: true,
    };
  },
  methods: {
    setUser(data) {
      this.listUsers = data;
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
    setColor() {
      if (this.isDarkMode == true) {
        return "#fff";
      }
      if (this.isDarkMode == false) {
        return "#4f46e5";
      }
      return "#4f46e5";
    },
    rangeChart() {
      if (this.isActive) {
        axios.get("/api/dealfull").then((response) => {
          const totals = [];
          this.arrDeal = totals;
          const data = response.data.data;
          data.forEach((d) => {
            const date = moment(d.tanggal, "YYYYMMDD").format("LL");
            const { jumlah } = d;
            totals.push([date, jumlah]);
          });
          //   console.log(this.arrDeal);
        });
      }
      if (!this.isActive) {
        axios.get("/api/deal").then((response) => {
          const data = response.data.data;
          const totals = [];
          this.arrDeal = totals;
          data.forEach((d) => {
            const date = moment(d.tanggal, "YYYYMMDD").format("LL");
            const { jumlah } = d;
            totals.push([date, jumlah]);
          });
          //   console.log(this.arrDeal);
        });
      }
    },
  },
  mounted() {
    axios
      .get("/api/client")
      .then((response) => {
        this.users = response.data.data.length;

        const data = response.data.data;

        data.forEach((d) => {
          if (d.status.length === 4) {
            this.userDeal++;
          }
          if (d.status.length === 10) {
            this.userKonsul++;
          }
        });

        this.setUser(data);
      })
      .catch((err) => console.log(err));

    axios.get("/api/dealfull").then((response) => {
      const totals = [];
      this.arrDeal = totals;
      const data = response.data.data;
      data.forEach((d) => {
        const date = moment(d.tanggal, "YYYYMMDD").format("LL");
        const { jumlah } = d;
        totals.push([date, jumlah]);
      });
      //   console.log(this.arrDeal);
    });
  },
};
</script>
