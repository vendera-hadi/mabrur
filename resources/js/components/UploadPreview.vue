<template>
  <div>
      <div class="file-upload-form">
          <input name="file" type="file" @change="previewImage" accept="image/*" required>
      </div>
      <div class="image-preview" v-if="imageData.length > 0">
          <img class="preview" :src="imageData">
      </div>
  </div>
</template>

<script>
    export default {
        data: function () {
          return {
            imageData: ""
          }
        },
        methods: {
            previewImage: function(event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.imageData = e.target.result;
                    }
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
