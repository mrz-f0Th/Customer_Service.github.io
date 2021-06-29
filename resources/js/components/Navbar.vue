<template>
  <div>
    <!-- Navbar Desktop -->
    <div class="md:flex hidden fixed z-0 duration-500 sm:hidden">
      <!-- ini :class="active ? 'w-20' : 'w-36 absolute'" -->
      <nav
        class="border-r h-screen absolute z-10 duration-500"
        :class="
          isDarkMode
            ? 'bg-gray-900 text-white border-gray-500'
            : 'bg-white border-gray-200'
        "
      >
        <div
          class="flex mx-auto py-6 border-b"
          :class="isDarkMode ? 'border-gray-500' : 'border-gray-200'"
        >
          <div class="w-20 cursor-pointer">
            <div>
              <img
                class="mx-auto h-6 w-auto"
                src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                alt="Workflow"
              />
            </div>
          </div>
        </div>
        <div class="flex mt-16 items-center">
          <div class="w-20">
            <router-link
              exact
              to="/dashboard"
              class="
                w-10
                mx-auto
                h-9
                flex
                items-center
                hover:bg-indigo-600
                rounded-md
                transition
                duration-100
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 mx-auto"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
              </svg>
            </router-link>
          </div>
        </div>
        <div class="flex mt-16 items-center">
          <div class="w-20">
            <router-link
              to="/add"
              class="
                w-10
                mx-auto
                h-9
                flex
                items-center
                hover:bg-indigo-600
                rounded-md
                transition
                duration-100
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 mx-auto"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                />
              </svg>
            </router-link>
          </div>
        </div>
        <div class="flex mt-16 items-center">
          <div class="w-20">
            <router-link
              to="/report"
              class="
                w-10
                mx-auto
                h-9
                flex
                items-center
                hover:bg-indigo-600
                rounded-md
                transition
                duration-100
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 mx-auto"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"
                />
              </svg>
            </router-link>
          </div>
        </div>
      </nav>

      <div
        class="
          border-b
          fixed
          w-full
          h-16
          py-9
          flex
          items-center
          justify-between
          duration-500
        "
        :class="
          isDarkMode
            ? 'bg-gray-900 text-white border-gray-500'
            : 'bg-white border-gray-200'
        "
      >
        <div class="mx-8 ml-28 z-0">
          <h1
            class="font-semibold text-xl"
            :class="isDarkMode ? 'text-white' : 'text-blue-900'"
          >
            Jotaro Kujo
          </h1>
          <p
            class="text-xs"
            :class="isDarkMode ? 'text-gray-300' : 'text-gray-500'"
          >
            CUSTOMER SERVICE
          </p>
        </div>
        <div class="flex -space-x-2 mr-7 overflow-hidden">
          <img
            class="inline-block h-10 w-10 rounded-full"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt=""
          />
        </div>
      </div>
    </div>

    <!-- Navbar Mobile -->
    <div
      class="
        rounded-t-xl
        md:hidden
        sm:flex
        flex
        fixed
        pb-1
        -bottom-1
        w-full
        z-20
      "
      :class="isDarkMode ? 'bg-white text-black' : 'bg-gray-900 text-white'"
    >
      <div class="flex items-center w-1/4 my-3 rounded-t-xl">
        <div class="w-20 mx-auto">
          <router-link
            exact
            to="/dashboard"
            class="
              w-10
              mx-auto
              h-9
              flex
              items-center
              hover:bg-indigo-600
              rounded-md
              transition
              duration-100
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 mx-auto"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
              />
            </svg>
          </router-link>
        </div>
      </div>
      <div class="flex items-center w-1/4">
        <div class="w-20 mx-auto">
          <router-link
            to="/add"
            class="
              w-10
              mx-auto
              h-9
              flex
              items-center
              hover:bg-indigo-600
              rounded-md
              transition
              duration-100
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 mx-auto"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
              />
            </svg>
          </router-link>
        </div>
      </div>
      <div class="flex items-center w-1/4">
        <div class="w-20 mx-auto">
          <router-link
            to="/report"
            class="
              w-10
              mx-auto
              h-9
              flex
              items-center
              hover:bg-indigo-600
              rounded-md
              transition
              duration-100
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6 mx-auto"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"
              />
            </svg>
          </router-link>
        </div>
      </div>
      <div
        class="flex items-center w-1/4 rounded-t-xl"
        :class="isDarkMode ? 'bg-white' : 'bg-gray-900'"
      >
        <div class="w-20 mx-auto">
          <div class="overflow-hidden text-center">
            <img
              class="inline-block h-10 w-10 rounded-full"
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt="sally"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      active: true,
    };
  },
  props: ["isDarkMode"],
  methods: {},
};
</script>


