  <!-- Section Paper Dinamic -->
  <div class="row center-align" id="papers" style="background-color:#f4f4f4;padding-top:55px;">
    <div class="col s12">
      <input type="hidden" id="input_pappers" v-model="inputValue">
      <button hidden type="hidden" id="buttonPappers" v-on:click="expandPapper"></button>
    </div>
    <div class="row">
      <div class="col s6">
        <div class="col s1" v-for="papper of pappers" style="padding:0px;width:50px;height:50px;">
          <div class="contenedor_card">
            <div :class="papper.class" style="width:50%;margin:0px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row">
  <div class="col s6">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col s12 m6">
      <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
          . Excepteur sint occaecat cupidatat non proident, sunt in culpa
          qui officia deserunt mollit anim id est laborum.</p>
      </div>
  </div>
