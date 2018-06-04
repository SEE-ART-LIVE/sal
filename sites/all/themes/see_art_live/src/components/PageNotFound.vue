<template>
    <article>
        <section class="section">
            <div class="container">
                <div class="columns">
                  <div class="column is-primary has-text-dark m1">
                    <h2 class="h2">Sorry this page does not exist!</h2>
                  </div>
                </div>
            </div>
        </section>
    </article>
</template>

<script>
export default {
  name: 'PageNotFound'
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