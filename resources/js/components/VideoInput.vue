<template>
  <div>
      <input type="text" placeholder="Link Youtube" class="form-control w-50" name="link" value="" @keyup="searchTimeOut">
      <input type="hidden" name="embed_code" v-bind:value="videoLink">
      <div class="mt-5 text-center w-50" v-if="loading"><h5>Loading ...</h5></div>
      <div class="mt-5 text-center w-50" v-if="!valid && !loading && videoLink!==''"><h5>Link Video tidak Valid</h5></div>
      <div class="embed-responsive embed-responsive-16by9 w-50 mt-3" v-if="valid && !loading">
        <iframe class="embed-responsive-item" v-bind:src="videoLink" allowfullscreen></iframe>
      </div>
  </div>
</template>

<script>
    export default {
        data: function () {
          return {
            timer: null,
            loading: false,
            videoLink: "",
            valid: false
          }
        },
        methods: {
            validVideo: function(event) {
                this.loading = false;
                // Reference to the DOM input element
                var value = event.target.value;
                if(value){
                  var regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
                  var match = value.match(regExp);
                  if (match && match[2].length == 11) {
                    console.log(match[2], "regex");
                    this.videoLink = "https://www.youtube.com/embed/" + match[2];
                    this.valid = true;
                  }else{
                    this.videoLink = value;
                    this.valid = false;
                  }
                }else{
                  this.videoLink = "";
                  this.valid = false;
                }
            },
            searchTimeOut(event) {
                this.loading = true;
                if (this.timer) {
                    clearTimeout(this.timer);
                    this.timer = null;
                }
                this.timer = setTimeout(() => {
                    this.validVideo(event)
                }, 800);
            }
        },
        watch: {
          valid: function (val) {
            if(!val){
              $('#submit').attr('disabled','disabled');
            }else{
              $('#submit').removeAttr('disabled');
            }
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
