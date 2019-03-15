<template>
  <section class="section section-hero-area">
    <div class="container-fluid">
      <h1>|</h1>

      <div class="row">
        <div class="col-lg-12 hero">
          <div class="jumbotron">
            <h1 class="display-4">Share your files with care.</h1>
            <p class="lead">Only show your important attachments when necessary.</p>
            <button type="button" class="btn buynow">buy now</button>
            <button type="button" class="btn trynow">try now</button>
          </div>
        </div>
      </div>

      <div class="row banner-bottom">
        <div class="col-4 banner-bottom-section">

          <div class="illustration">

          </div>

          <div class="text">
            <h4>Access limitation</h4>
            <p>You have some files to show someone, but only if they accept an agreement, like an NDA, or a quotation.</p>
          </div>
          
        </div>
        <div class="col-4 banner-bottom-section">

          <div class="illustration">
            
          </div>

          <div class="text">
            <h4>Client administration</h4>
            <p>You send the agreement with a special link, showing you directly who accepted and when.</p>
          </div>

        </div>
        <div class="col-4 banner-bottom-section">

          <div class="illustration">
            
          </div>
          <div class="text">
            <h4>File observation</h4>
            <p>They immediately receive the necessary documents and you are sure they are supposed to.</p>
          </div>

        </div>
      </div>

      <div class="row pricing">

        <div class="col-2">
          <div class="card sub">
            <div class="card-body sub-title">
              <h5 class="card-title">Demo</h5>
            </div>
            <div class="card-body sub-list">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">10 sends</li>
                <li class="list-group-item">Easy access</li>
                <li class="list-group-item">No ads</li>
                <li class="list-group-item">Geen verzendkosten</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#" class="btn buynow">Try now</a>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="card sub">
            <div class="card-body sub-title">
              <h5 class="card-title">Demo</h5>
            </div>
            <div class="card-body sub-list">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">10 sends</li>
                <li class="list-group-item">Easy access</li>
                <li class="list-group-item">No ads</li>
                <li class="list-group-item">Geen verzendkosten</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#" class="btn buynow">Try now</a>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="card sub">
            <div class="card-body sub-title">
              <h5 class="card-title">Demo</h5>
            </div>
            <div class="card-body sub-list">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">10 sends</li>
                <li class="list-group-item">Easy access</li>
                <li class="list-group-item">No ads</li>
                <li class="list-group-item">Geen verzendkosten</li>
              </ul>
            </div>
            <div class="card-footer">
              <a href="#" class="btn buynow">Try now</a>
            </div>
          </div>
        </div>

      </div>

      <div class="row banner-bottom">
        <div class="col-4 banner-bottom-section">

          <div class="illustration">

          </div>

          <div class="text">
            <h4>Access limitation</h4>
            <p>You have some files to show someone, but only if they accept an agreement, like an NDA, or a quotation.</p>
          </div>
          
        </div>
        <div class="col-4 banner-bottom-section">

          <div class="illustration">
            
          </div>

          <div class="text">
            <h4>Client administration</h4>
            <p>You send the agreement with a special link, showing you directly who accepted and when.</p>
          </div>

        </div>
        <div class="col-4 banner-bottom-section">

          <div class="illustration">
            
          </div>
          <div class="text">
            <h4>File observation</h4>
            <p>They immediately receive the necessary documents and you are sure they are supposed to.</p>
          </div>

        </div>
      </div>

    </div>
  </section>
</template>

<script type="text/babel">

export default {
  mounted () {
    this.$utils.setLayout('front')
    this.$utils.setSkin('stark')
  }
}
</script>

<style lang="scss" scoped>
  @import url('https://fonts.googleapis.com/css?family=Patua+One|Quattrocento+Sans|Roboto');
  *{
    color: #FFF;
  }

  p{
    font-family: 'Quattrocento Sans', sans-serif;
  }

  .btn{
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    text-transform: uppercase;
    color: #FFF;
    font-family: Roboto, sans-serif;
    font-size: 14px;
    padding: 13px 40px;
    position: relative;

    &.buynow{
      background: #E34543;
      margin: .5rem;

      &:hover{
        background: #d6312f;
        top: 1px;
      }
    }
    &.trynow{
      border: 1px solid #FFFFFF;
      box-sizing: border-box;
      background: rgba(255, 255, 255, 0.18);
      margin: .5rem;

      &:hover{
        background: rgba(0, 0, 0, 0.18);
        top: 1px;
      }
    }
  }

  .hero{
    background-image: url('~/assets/img/banner-img.png');
    background-size: auto calc(100% + 2rem);
    background-repeat: no-repeat;
    background-position: 0 -1rem;
    border-top: solid .5rem #2F8ED2;
    height: 70vh;
    display: flex;
    padding-left: 5rem;
    margin-top: -.5rem;

    .jumbotron{
      background-color: transparent;
      align-self: center;
      margin-bottom: 0;

      h1{
        font-family: 'Patua One', 'Arial', serif;
        margin-bottom: 0;
      }

      p{
        font-style: italic;
        margin-bottom: 1.2rem;
      }

      h1, p{
        text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
      }
    }
  }

  .banner-bottom{
    background-color: #2F8ED2;
    padding: 70px 0;
    position: relative;

    &::before{
      content: ' ';
      background-image: url('~/assets/img/bannerbottomtop.png');
      background-size: 100vw 100%;
      position: absolute;
      top: -40px;
      left: 0;
      right: 0;
      width: 100vw;
      height: 40px;
    }

    &::after{
      content: ' ';
      background-image: url('~/assets/img/bannerbottombottom.png');
      background-size: 100vw 100%;
      position: absolute;
      bottom: -40px;
      left: 0;
      right: 0;
      width: 100vw;
      height: 40px;
    }

    .banner-bottom-section{
      padding: 0 60px;
      font-family: Roboto, sans-serif;
      display: flex;

      .illustration{
        width: 6rem;
        height: 6rem;
        border: 1px solid #FFF;
        border-radius: 50%;
        display: inline-block;
        align-self: center;
      }

      .text{
        display: inline-block;
        width: calc(100% - 7rem);
        padding-left: 1rem;
        align-self: center;

        h4{
          font-weight: bold;
          margin-bottom: .5rem;
        }
      }

      &:not(:first-child){
        border-left: 1px solid #FFF;
      }
      
    }
  }

  .pricing{
    height: 70vh;
    display: flex;
    align-content: center;
    justify-content: center;

    .sub{
      border: 5px solid #2F8ED2;
      text-align: center;

      .sub-title{
        background: #2F8ED2;
      }

      .sub-list>.list-group>.list-group-item{
        color: #222;
      }
    }
  }
</style>

