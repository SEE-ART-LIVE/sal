<template>
    <article>
        <section class="section">
            <div class="container">
                <div class="columns">
                  <div class="column is-8 is-primary has-text-dark m1">
                  <h1 class="h1">SEE ART LIVE 🎨</h1>
                  </div>
                </div>
                <div class="columns">
                  <div class="column is-primary has-text-dark m1">
                    <h2 class="h2">{{this.$route.path}}</h2>
                    <!-- <div class="background-image" style="background-image:url(https://via.placeholder.com/1920x1920/a5s/000000?text=event-image);"></div> -->
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                  </div>
                </div>
            </div>
        </section>
    </article>
</template>

<script>
export default {
  name: 'Default',
  props: ["arr"],
  mounted () {
      console.log('Default')
  }
}
</script>


<style lang="scss" scoped>
.background-image {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  padding-bottom: 56.7%;
  width: 100%;
  margin-bottom: 20px;
}
div {
  position: relative;
  .content-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
  }
  overflow: hidden;
  #wrap {
    #block {
    }
  }
}
</style>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped></style>