<template>
  <div class="mt-10 md:mt-0">
    <nav-bar :isDarkMode="isDarkMode"></nav-bar>
    <div
      class="md:pl-24 md:pt-16 h-full md:pb-5 pb-20 duration-500"
      :class="isDarkMode ? 'bg-gray-800 text-white' : 'bg-gray-50'"
    >
      <div class="container p-5 md:pl-0 h-full mt-5">
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form
            action="#"
            method="POST"
            v-on:submit.prevent
            enctype="multipart/form-data"
          >
            <div class="shadow overflow-hidden rounded-md">
              <div
                class="px-4 py-5 sm:p-6"
                :class="isDarkMode ? 'bg-gray-900 rounded-md' : 'bg-white'"
              >
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-2">
                    <label
                      for="nama"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >Nama</label
                    >
                    <input
                      required=""
                      type="text"
                      name="nama"
                      id="nama"
                      autocomplete="given-name"
                      class="
                        p-2
                        mt-1
                        focus:outline-none
                        ring-0
                        focus:ring focus:ring-indigo-500
                        focus:border-indigo-500
                        block
                        w-full
                        shadow
                        sm:text-sm
                        border-gray-300
                        rounded-md
                      "
                      :class="isDarkMode ? 'bg-gray-700' : ''"
                      v-model="customerBaru.nama"
                    />
                  </div>

                  <div class="col-span-6 sm:col-span-2">
                    <label
                      for="jasa"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >Jasa</label
                    >
                    <input
                      required=""
                      type="text"
                      name="jasa"
                      id="jasa"
                      autocomplete="jasa"
                      class="
                        p-2
                        mt-1
                        focus:outline-none
                        ring-0
                        focus:ring focus:ring-indigo-500
                        focus:border-indigo-500
                        block
                        w-full
                        shadow
                        sm:text-sm
                        border-gray-300
                        rounded-md
                      "
                      :class="isDarkMode ? 'bg-gray-700' : ''"
                      v-model="customerBaru.jasa"
                    />
                  </div>

                  <div class="col-span-8 sm:col-span-2">
                    <label
                      for="no_telp"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >Nomor Telepon</label
                    >
                    <input
                      required=""
                      type="text"
                      name="no_telp"
                      id="no_telp"
                      autocomplete="no_telp"
                      class="
                        p-2
                        mt-1
                        focus:outline-none
                        ring-0
                        focus:ring focus:ring-indigo-500
                        focus:border-indigo-500
                        block
                        w-full
                        shadow
                        sm:text-sm
                        border-gray-300
                        rounded-md
                      "
                      :class="isDarkMode ? 'bg-gray-700' : ''"
                      v-model="customerBaru.no_telp"
                    />
                  </div>

                  <div class="col-span-7">
                    <label
                      for="brief"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >Briefing</label
                    >
                    <div class="mt-1">
                      <textarea
                        id="brief"
                        name="brief"
                        rows="3"
                        class="
                          shadow
                          focus:outline-none
                          ring-0
                          focus:ring focus:ring-indigo-500
                          focus:border-indigo-500
                          mt-1
                          block
                          w-full
                          sm:text-sm
                          border
                          rounded-md
                          p-2
                        "
                        :class="
                          isDarkMode
                            ? 'bg-gray-700 border-gray-600'
                            : 'border-gray-300'
                        "
                        v-model="customerBaru.brief"
                      ></textarea>
                    </div>
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label
                      for="status"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >Status</label
                    >
                    <select
                      id="status"
                      name="status"
                      autocomplete="status"
                      class="
                        mt-1
                        block
                        w-full
                        py-2
                        px-3
                        border border-gray-300
                        bg-white
                        rounded-md
                        shadow
                        focus:outline-none
                        ring-0
                        focus:ring focus:ring-indigo-500
                        focus:border-indigo-500
                        sm:text-sm
                      "
                      :class="isDarkMode ? 'bg-gray-700' : ''"
                      v-model="customerBaru.status"
                    >
                      <option value="deal">Deal</option>
                      <option value="konsultasi">Konsultasi</option>
                    </select>
                  </div>

                  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label
                      for="tanggal"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >Tanggal</label
                    >
                    <input
                      required=""
                      type="date"
                      name="tanggal"
                      id="tanggal"
                      class="
                        p-2
                        mt-1
                        focus:outline-none
                        ring-0
                        focus:ring focus:ring-indigo-500
                        focus:border-indigo-500
                        block
                        w-full
                        shadow
                        sm:text-sm
                        border-gray-300
                        rounded-md
                      "
                      :class="isDarkMode ? 'bg-gray-700' : ''"
                      v-model="customerBaru.tanggal"
                    />
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label
                      for="no_invoice"
                      class="block font-medium"
                      :class="isDarkMode ? 'text-white' : 'text-gray-700'"
                      >No Invoice</label
                    >
                    <input
                      required=""
                      type="text"
                      name="no_invoice"
                      id="no_invoice"
                      autocomplete="no_invoice"
                      class="
                        p-2
                        mt-1
                        focus:outline-none
                        ring-0
                        focus:ring focus:ring-indigo-500
                        focus:border-indigo-500
                        block
                        w-full
                        shadow
                        sm:text-sm
                        border-gray-300
                        rounded-md
                      "
                      :class="isDarkMode ? 'bg-gray-700' : ''"
                      v-model="customerBaru.no_invoice"
                    />
                  </div>

                  <div class="col-span-8 md:col-span-8 sm:col-span-6">
                    <div
                      class="
                        mt-1
                        flex
                        justify-center
                        px-6
                        pt-5
                        pb-6
                        border-2 border-gray-300 border-dashed
                        rounded-md
                      "
                    >
                      <div v-if="!image" class="space-y-1 text-center">
                        <svg
                          class="mx-auto h-12 w-12 text-gray-400"
                          stroke="currentColor"
                          fill="none"
                          viewBox="0 0 48 48"
                          aria-hidden="true"
                        >
                          <path
                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <div
                          class="flex text-sm"
                          :class="
                            isDarkMode ? 'text-gray-400' : 'text-gray-600'
                          "
                        >
                          <label
                            for="file-upload"
                            class="
                              relative
                              cursor-pointer
                              rounded-md
                              font-medium
                              text-indigo-600
                              hover:text-indigo-500
                              focus-within:outline-none
                              focus-within:ring-2
                              focus-within:ring-offset-2
                              focus-within:ring-indigo-500
                            "
                            :class="isDarkMode ? 'bg-gray-900' : 'bg-white'"
                          >
                            <span>Upload a file</span>
                            <input
                              required=""
                              type="file"
                              id="file-upload"
                              name="upload"
                              class="sr-only"
                              ref="file"
                              v-on:change="
                                handleFileUpload();
                                getImage();
                              "
                            />
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p
                          class="text-xs"
                          :class="
                            isDarkMode ? 'text-gray-300' : 'text-gray-500'
                          "
                        >
                          PNG, JPG, GIF up to 10MB
                        </p>
                      </div>
                      <img
                        v-else
                        :src="image"
                        alt="imagePreview"
                        class=""
                        width="400"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="px-4 py-3 text-right sm:px-6"
                :class="isDarkMode ? 'bg-gray-600' : 'bg-gray-100'"
              >
                <button
                  type="submit"
                  class="
                    inline-flex
                    justify-center
                    py-2
                    px-4
                    border border-transparent
                    shadow
                    font-medium
                    rounded-md
                    text-white
                    bg-indigo-600
                    hover:bg-indigo-700
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                  "
                  :disabled="disabled"
                  @click="
                    addCustomer();
                    isActive = !isActive;
                    disabled = !disabled;
                  "
                  :class="isActive ? 'cursor-not-allowed' : ''"
                >
                  <div v-if="isActive">
                    <svg
                      class="animate-spin h-5 w-5 text-white font-medium"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <circle
                        class="opacity-25"
                        cx="12"
                        cy="12"
                        r="10"
                        stroke="currentColor"
                        stroke-width="4"
                      ></circle>
                      <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                      ></path>
                    </svg>
                  </div>
                  <p v-else class="disabled">Submit</p>
                </button>
              </div>
            </div>
          </form>
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
        <h1 class="font-semibold text-lg">Add</h1>
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
import NavBar from "../components/Navbar.vue";

export default {
  name: "Add",
  components: {
    NavBar,
  },
  data() {
    return {
      customerBaru: {},
      file: "",
      isActive: false,
      disabled: false,
      image: "",
    };
  },
  props: ["isDarkMode"],
  methods: {
    setCustomer(data) {
      this.customerBaru = data;
    },
    addCustomer() {
      axios
        .post("/api/client", this.customerBaru)
        .then(() => {
          this.$toast.success("Data Berhasil di tambahkan ", {
            // optional options Object
            position: "top-right",
          });
          this.$router.push({ path: "/report" });
        })
        .catch(() => {
          this.disabled = false;
          this.isActive = false;
          this.$toast.error("Isi kan data dengan benar !", {
            // optional options Object
            position: "top-right",
          });
        });
    },
    handleFileUpload() {
      this.file = this.$refs.file.files[0];
      this.customerBaru.upload = this.file.name;
      console.log(this.file);
    },
    getImage() {
      const image = this.$refs.file.files[0];
      const reader = new FileReader();

      reader.readAsDataURL(image);
      reader.onload = (e) => {
        this.image = e.target.result;
      };
    },
  },
};
</script>

<style>
</style>
