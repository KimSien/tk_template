<div class="row">

<div class="large-9 columns" id="docs">

<h2 id="abide" class="docs-heading" data-magellan-target="abide">Abide<a class="docs-heading-icon" href="#abide"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-0">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">data-abide</span> <span class="hljs-attr">novalidate</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">data-abide-error</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"alert callout"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"display: none;"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fi-alert"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> There are some errors in your form.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-12 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Number Required
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"1234"</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"exampleHelpText"</span> <span class="hljs-attr">required</span> <span class="hljs-attr">pattern</span>=<span class="hljs-string">"number"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-error"</span>&gt;</span>
          Yo, you had better fill this out, it's required.
        <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"help-text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleHelpText"</span>&gt;</span>Here's how you use this input field!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-12 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Nothing Required!
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Use me, or don't"</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"exampleHelpTex"</span> <span class="hljs-attr">data-abide-ignore</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"help-text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleHelpTex"</span>&gt;</span>This input is ignored by Abide using `data-abide-ignore`<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-12 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Password Required
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"yeti4preZ"</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"exampleHelpText"</span> <span class="hljs-attr">required</span> &gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-error"</span>&gt;</span>
          I'm required!
        <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"help-text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleHelpText"</span>&gt;</span>Enter a password please.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-12 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Re-enter Password
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"yeti4preZ"</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"exampleHelpText2"</span> <span class="hljs-attr">required</span> <span class="hljs-attr">pattern</span>=<span class="hljs-string">"alpha_numeric"</span> <span class="hljs-attr">data-equalto</span>=<span class="hljs-string">"password"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-error"</span>&gt;</span>
          Hey, passwords are supposed to match!
        <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"help-text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleHelpText2"</span>&gt;</span>This field is using the `data-equalto="password"` attribute, causing it to match the password field above.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>URL Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL.
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"http://foundation.zurb.com"</span> <span class="hljs-attr">pattern</span>=<span class="hljs-string">"url"</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>European Cars, Choose One, it can't be the blank option.
        <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"select"</span> <span class="hljs-attr">required</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">""</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"volvo"</span>&gt;</span>Volvo<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"saab"</span>&gt;</span>Saab<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"mercedes"</span>&gt;</span>Mercedes<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"audi"</span>&gt;</span>Audi<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">legend</span>&gt;</span>Choose Your Favorite, and this is required, so you have to pick one.<span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pokemon"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Red"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pokemonRed"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pokemonRed"</span>&gt;</span>Red<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pokemon"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Blue"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pokemonBlue"</span> <span class="hljs-attr">required</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pokemonBlue"</span>&gt;</span>Blue<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pokemon"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Yellow"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pokemonYellow"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pokemonYellow"</span>&gt;</span>Yellow<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">legend</span>&gt;</span>Choose Your Favorite - not required, you can leave this one blank.<span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pockets"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Red"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pocketsRed"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pocketsRed"</span>&gt;</span>Red<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pockets"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Blue"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pocketsBlue"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pocketsBlue"</span>&gt;</span>Blue<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pockets"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Yellow"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pocketsYellow"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pocketsYellow"</span>&gt;</span>Yellow<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">legend</span>&gt;</span>Check these out<span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"checkbox1"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"checkbox1"</span>&gt;</span>Checkbox 1<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"checkbox2"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">required</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"checkbox2"</span>&gt;</span>Checkbox 2<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"checkbox3"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"checkbox3"</span>&gt;</span>Checkbox 3<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"submit"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Submit"</span>&gt;</span>Submit<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"reset"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Reset"</span>&gt;</span>Reset<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><form data-abide="j7nozn-abide" novalidate="">
  <div data-abide-error="" class="alert callout" style="display: none;">
    <p><i class="fi-alert"></i> There are some errors in your form.</p>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <label>Number Required
        <input type="text" placeholder="1234" aria-describedby="exampleHelpText" required="" pattern="number">
        <span class="form-error">
          Yo, you had better fill this out, it's required.
        </span>
      </label>
      <p class="help-text" id="exampleHelpText">Here's how you use this input field!</p>
    </div>
    <div class="small-12 columns">
      <label>Nothing Required!
        <input type="text" placeholder="Use me, or don't" aria-describedby="exampleHelpTex" data-abide-ignore="">
      </label>
      <p class="help-text" id="exampleHelpTex">This input is ignored by Abide using `data-abide-ignore`</p>
    </div>
    <div class="small-12 columns">
      <label>Password Required
        <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="exampleHelpText" required="">
        <span class="form-error">
          I'm required!
        </span>
      </label>
      <p class="help-text" id="exampleHelpText">Enter a password please.</p>
    </div>
    <div class="small-12 columns">
      <label>Re-enter Password
        <input type="password" placeholder="yeti4preZ" aria-describedby="exampleHelpText2" required="" pattern="alpha_numeric" data-equalto="password">
        <span class="form-error">
          Hey, passwords are supposed to match!
        </span>
      </label>
      <p class="help-text" id="exampleHelpText2">This field is using the `data-equalto="password"` attribute, causing it to match the password field above.</p>
    </div>
  </div>
  <div class="row">
    <div class="medium-6 columns">
      <label>URL Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL.
        <input type="text" placeholder="http://foundation.zurb.com" pattern="url">
      </label>
    </div>
    <div class="medium-6 columns">
      <label>European Cars, Choose One, it can't be the blank option.
        <select id="select" required="">
          <option value=""></option>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </label>
    </div>
  </div>
  <div class="row">
    <fieldset class="large-6 columns">
      <legend>Choose Your Favorite, and this is required, so you have to pick one.</legend>
      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required=""><label for="pokemonBlue">Blue</label>
      <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
    </fieldset>
    <fieldset class="large-6 columns">
      <legend>Choose Your Favorite - not required, you can leave this one blank.</legend>
      <input type="radio" name="pockets" value="Red" id="pocketsRed"><label for="pocketsRed">Red</label>
      <input type="radio" name="pockets" value="Blue" id="pocketsBlue"><label for="pocketsBlue">Blue</label>
      <input type="radio" name="pockets" value="Yellow" id="pocketsYellow"><label for="pocketsYellow">Yellow</label>
    </fieldset>
    <fieldset class="large-6 columns">
      <legend>Check these out</legend>
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
      <input id="checkbox2" type="checkbox" required=""><label for="checkbox2">Checkbox 2</label>
      <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
    </fieldset>
  </div>
  <div class="row">
    <fieldset class="large-6 columns">
      <button class="button" type="submit" value="Submit">Submit</button>
    </fieldset>
    <fieldset class="large-6 columns">
      <button class="button" type="reset" value="Reset">Reset</button>
    </fieldset>
  </div>
</form></div><hr>
<h2 id="accordion" class="docs-heading" data-magellan-target="accordion">Accordion<a class="docs-heading-icon" href="#accordion"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-1">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion"</span> <span class="hljs-attr">data-accordion</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tablist"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-item is-active"</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel1d"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-title"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1d-heading"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"panel1d"</span>&gt;</span>Accordion 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1d"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-content"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">data-tab-content</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"panel1d-heading"</span>&gt;</span>
      Panel 1. Lorem ipsum dolor
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-item"</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel1d"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-title"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1d-heading"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"panel1d"</span>&gt;</span>Accordion 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1d"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-content"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">data-tab-content</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"panel1d-heading"</span>&gt;</span>
      Panel 2. Lorem ipsum dolor
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-item"</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel1d"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-title"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1d-heading"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"panel1d"</span>&gt;</span>Accordion 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1d"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"accordion-content"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">data-tab-content</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"panel1d-heading"</span>&gt;</span>
      Panel 3. Lorem ipsum dolor
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="accordion" data-accordion="lrpkj8-accordion" role="tablist">
  <li class="accordion-item">
    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-label" aria-controls="panel1d" aria-expanded="true" aria-selected="true">Accordion 1</a>
    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content="" aria-labelledby="panel1d-label" aria-hidden="true" style="display: none;">
      Panel 1. Lorem ipsum dolor
    </div>
  </li>
  <li class="accordion-item is-active">
    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-label" aria-controls="panel1d" aria-expanded="false" aria-selected="false">Accordion 1</a>
    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content="" aria-labelledby="panel1d-label" aria-hidden="false" style="display: block;">
      Panel 2. Lorem ipsum dolor
    </div>
  </li>
  <li class="accordion-item">
    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-label" aria-controls="panel1d" aria-expanded="false" aria-selected="false">Accordion 1</a>
    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content="" aria-labelledby="panel1d-label" aria-hidden="true">
      Panel 3. Lorem ipsum dolor
    </div>
  </li>
</ul></div><hr>
<h2 id="accordion-menu" class="docs-heading" data-magellan-target="accordion-menu">Accordion Menu<a class="docs-heading-icon" href="#accordion-menu"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-2">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical menu"</span> <span class="hljs-attr">data-accordion-menu</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu vertical nested is-active"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1A<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu vertical nested"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Ai<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Aii<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Aiii<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1C<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu vertical nested"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2A<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="vertical menu" data-accordion-menu="h5teo0-accordion-menu" role="menu" aria-multiselectable="true">
  <li role="menuitem" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="Item 1" aria-controls="8cycai-acc-menu" id="evw0oi-acc-menu-link">
    <a href="#0" tabindex="0">Item 1</a>
    <ul class="menu vertical nested is-active submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="menu" aria-labelledby="evw0oi-acc-menu-link" id="8cycai-acc-menu" style="display: none;">
      <li role="menuitem" class="is-accordion-submenu-parent is-submenu-item is-accordion-submenu-item" aria-haspopup="true" aria-expanded="false" aria-label="Item 1A" aria-controls="u5m56m-acc-menu" id="mgtzmp-acc-menu-link">
        <a href="#0">Item 1A</a>
        <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="menu" aria-labelledby="mgtzmp-acc-menu-link" id="u5m56m-acc-menu" style="display: none;">
          <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 1Ai</a></li>
          <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 1Aii</a></li>
          <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 1Aiii</a></li>
        </ul>
      </li>
      <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 1B</a></li>
      <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 1C</a></li>
    </ul>
  </li>
  <li role="menuitem" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="Item 2" aria-controls="ynq7pu-acc-menu" id="ezf7bo-acc-menu-link">
    <a href="#0">Item 2</a>
    <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="menu" aria-labelledby="ezf7bo-acc-menu-link" id="ynq7pu-acc-menu" style="display: none;">
      <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 2A</a></li>
      <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="#0">Item 2B</a></li>
    </ul>
  </li>
  <li role="menuitem"><a href="#0">Item 3</a></li>
</ul></div><hr>
<h2 id="badge" class="docs-heading" data-magellan-target="badge">Badge<a class="docs-heading-icon" href="#badge"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-3">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"secondary badge"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"success badge"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"alert badge"</span>&gt;</span>A<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"warning badge"</span>&gt;</span>B<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><span class="secondary badge">2</span>
<span class="success badge">3</span>
<span class="alert badge">A</span>
<span class="warning badge">B</span></div><hr>
<h2 id="breadcrumbs" class="docs-heading" data-magellan-target="breadcrumbs">Breadcrumbs<a class="docs-heading-icon" href="#breadcrumbs"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-4">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">nav</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"You are here:"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"navigation"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"breadcrumbs"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Home<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Features<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"disabled"</span>&gt;</span>Gene Splicing<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Current: <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> Cloning
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">nav</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="#0">Home</a></li>
    <li><a href="#0">Features</a></li>
    <li class="disabled">Gene Splicing</li>
    <li>
      <span class="show-for-sr">Current: </span> Cloning
    </li>
  </ul>
</nav></div><hr>
<h2 id="button" class="docs-heading" data-magellan-target="button">Button<a class="docs-heading-icon" href="#button"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-5">Copy</button><pre><code class="html"><span class="hljs-comment">&lt;!-- Anchors (links) --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>Learn More<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#features"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>View All Features<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>

<span class="hljs-comment">&lt;!-- Buttons (actions) --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"success button"</span>&gt;</span>Save<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"alert button"</span>&gt;</span>Delete<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tiny button"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>So Tiny<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small button"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>So Small<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large button"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>So Large<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"expanded button"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Such Expand<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button-group"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><!-- Anchors (links) -->
<a href="#0" class="button">Learn More</a>
<a href="#features" class="button">View All Features</a>

<!-- Buttons (actions) -->
<button type="button" class="success button">Save</button>
<button type="button" class="alert button">Delete</button>

<a class="tiny button" href="#0">So Tiny</a>
<a class="small button" href="#0">So Small</a>
<a class="large button" href="#0">So Large</a>
<a class="expanded button" href="#0">Such Expand</a>

<div class="button-group">
  <a class="button">One</a>
  <a class="button">Two</a>
  <a class="button">Three</a>
</div></div><hr>
<h2 id="callout" class="docs-heading" data-magellan-target="callout">Callout<a class="docs-heading-icon" href="#callout"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-6">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span>This is a callout.<span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>It has an easy to override visual style, and is appropriately subdued.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>It's dangerous to go alone, take this.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout secondary"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span>This is a secondary callout<span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>It has an easy to override visual style, and is appropriately subdued.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>It's dangerous to go alone, take this.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout success"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span>This is a success callout<span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>It has an easy to override visual style, and is appropriately subdued.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>It's dangerous to go alone, take this.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout warning"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span>This is a warning callout<span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>It has an easy to override visual style, and is appropriately subdued.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>It's dangerous to go alone, take this.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout alert"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span>This is an alert callout<span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>It has an easy to override visual style, and is appropriately subdued.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>It's dangerous to go alone, take this.<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="callout">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout secondary">
  <h5>This is a secondary callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout success">
  <h5>This is a success callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout warning">
  <h5>This is a warning callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout alert">
  <h5>This is an alert callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div></div><hr>
<h2 id="close-button" class="docs-heading" data-magellan-target="close-button">Close Button<a class="docs-heading-icon" href="#close-button"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-7">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"close-button"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Close alert"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">aria-hidden</span>=<span class="hljs-string">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>This is a static close button example.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="callout">
  <button class="close-button" aria-label="Close alert" type="button">
    <span aria-hidden="true">×</span>
  </button>
  <p>This is a static close button example.</p>
</div></div><hr>
<h2 id="drilldown-menu" class="docs-heading" data-magellan-target="drilldown-menu">Drilldown Menu<a class="docs-heading-icon" href="#drilldown-menu"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-8">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical menu"</span> <span class="hljs-attr">data-drilldown</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"width: 200px"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"m1"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical menu"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"m2"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1A<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical menu"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"m3"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Aa<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Ba<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Ca<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Da<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1Ea<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1C<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1D<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1E<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical menu"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2A<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2C<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2D<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2E<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical menu"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3A<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3C<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3D<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3E<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span> Item 4<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="is-drilldown" style="min-height: 230.25px; max-width: 200px;"><ul class="vertical menu" data-drilldown="l7c2ar-drilldown" style="width: 200px" id="m1" role="menubar">
  <li role="menuitem" class="is-drilldown-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="Item 1">
    <a tabindex="0">Item 1</a>
    <ul class="vertical menu submenu is-drilldown-submenu" id="m2" data-submenu="" aria-hidden="true" role="menu"><li class="js-drilldown-back"><a tabindex="0">Back</a></li>
      <li role="menuitem" class="is-drilldown-submenu-parent is-submenu-item is-drilldown-submenu-item" aria-haspopup="true" aria-expanded="false" aria-label="Item 1A">
        <a tabindex="0">Item 1A</a>
        <ul class="vertical menu submenu is-drilldown-submenu" id="m3" data-submenu="" aria-hidden="true" role="menu"><li class="js-drilldown-back"><a tabindex="0">Back</a></li>
          <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1Aa</a></li>
          <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1Ba</a></li>
          <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1Ca</a></li>
          <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1Da</a></li>
          <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1Ea</a></li>
        </ul>
      </li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1B</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1C</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1D</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 1E</a></li>
    </ul>
  </li>
  <li role="menuitem" class="is-drilldown-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="Item 2">
    <a tabindex="0">Item 2</a>
    <ul class="vertical menu submenu is-drilldown-submenu" data-submenu="" aria-hidden="true" role="menu"><li class="js-drilldown-back"><a tabindex="0">Back</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 2A</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 2B</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 2C</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 2D</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 2E</a></li>
    </ul>
  </li>
  <li role="menuitem" class="is-drilldown-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="Item 3">
    <a tabindex="0">Item 3</a>
    <ul class="vertical menu submenu is-drilldown-submenu" data-submenu="" aria-hidden="true" role="menu"><li class="js-drilldown-back"><a tabindex="0">Back</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 3A</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 3B</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 3C</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 3D</a></li>
      <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="#0">Item 3E</a></li>
    </ul>
  </li>
  <li role="menuitem"><a href="#0"> Item 4</a></li>
</ul></div></div><hr>
<h2 id="dropdown-menu" class="docs-heading" data-magellan-target="dropdown-menu">Dropdown Menu<a class="docs-heading-icon" href="#dropdown-menu"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-9">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown menu"</span> <span class="hljs-attr">data-dropdown-menu</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1A Loooong<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span> Item 1 sub<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'menu'</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span>Item 1 subA<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span>Item 1 subB<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span> Item 1 sub<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'menu'</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span>Item 1 subA<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span>Item 1 subB<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span> Item 1 sub<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">'menu'</span>&gt;</span>
              <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span>Item 1 subA<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2A<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2B<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">'#0'</span>&gt;</span>Item 4<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="dropdown menu" data-dropdown-menu="kfxj59-dropdown-menu" role="menubar">
  <li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 1">
    <a tabindex="0">Item 1</a>
    <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" aria-hidden="true" role="menu">
      <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1A Loooong</a></li>
      <li role="menuitem" class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-right" aria-haspopup="true" aria-expanded="false" aria-label=" Item 1 sub">
        <a href="#0"> Item 1 sub</a>
        <ul class="menu submenu is-dropdown-submenu vertical" data-submenu="" aria-hidden="true" role="menu">
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1 subA</a></li>
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1 subB</a></li>
          <li role="menuitem" class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-right" aria-haspopup="true" aria-expanded="false" aria-label=" Item 1 sub">
            <a href="#0"> Item 1 sub</a>
            <ul class="menu submenu is-dropdown-submenu vertical" data-submenu="" aria-hidden="true" role="menu">
              <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1 subA</a></li>
              <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1 subB</a></li>
            </ul>
          </li>
          <li role="menuitem" class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-right" aria-haspopup="true" aria-expanded="false" aria-label=" Item 1 sub">
            <a href="#0"> Item 1 sub</a>
            <ul class="menu submenu is-dropdown-submenu vertical" data-submenu="" aria-hidden="true" role="menu">
              <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1 subA</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 1B</a></li>
    </ul>
  </li>
  <li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 2">
    <a href="#0">Item 2</a>
    <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" aria-hidden="true" role="menu">
      <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 2A</a></li>
      <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Item 2B</a></li>
    </ul>
  </li>
  <li role="menuitem"><a href="#0">Item 3</a></li>
  <li role="menuitem"><a href="#0">Item 4</a></li>
</ul></div><hr>
<h2 id="dropdown-pane" class="docs-heading" data-magellan-target="dropdown-pane">Dropdown Pane<a class="docs-heading-icon" href="#dropdown-pane"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-10">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"example-dropdown"</span>&gt;</span>Toggle Dropdown<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-pane"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-dropdown"</span> <span class="hljs-attr">data-dropdown</span>&gt;</span>
  Just some junk that needs to be said. Or not. Your choice.
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><button class="button" type="button" data-toggle="example-dropdown" aria-controls="example-dropdown" data-is-focus="false" data-yeti-box="example-dropdown" aria-haspopup="true" aria-expanded="false">Toggle Dropdown</button>
<div class="dropdown-pane" id="example-dropdown" data-dropdown="ccwox5-dropdown" aria-hidden="true" data-yeti-box="example-dropdown" data-resize="example-dropdown" aria-labelledby="mh3jh8-dd-anchor" data-events="resize">
  Just some junk that needs to be said. Or not. Your choice.
</div></div><hr>
<h2 id="equalizer" class="docs-heading" data-magellan-target="equalizer">Equalizer<a class="docs-heading-icon" href="#equalizer"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-11">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span> <span class="hljs-attr">data-equalizer</span> <span class="hljs-attr">data-equalize-on</span>=<span class="hljs-string">"medium"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"test-eq"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-4 columns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout"</span> <span class="hljs-attr">data-equalizer-watch</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>= <span class="hljs-string">"assets/img/generic/square-1.jpg"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-4 columns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout"</span> <span class="hljs-attr">data-equalizer-watch</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Pellentesque habitant morbi tristique senectus et netus et, ante.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-4 columns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout"</span> <span class="hljs-attr">data-equalizer-watch</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>= <span class="hljs-string">"assets/img/generic/rectangle-1.jpg"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="row" data-equalizer="vaxby2-equalizer" data-equalize-on="medium" id="test-eq" data-resize="li3wif-eq" data-events="resize">
  <div class="medium-4 columns">
    <div class="callout" data-equalizer-watch="" style="height: 159px;">
      <img src="assets/img/generic/square-1.jpg">
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="callout" data-equalizer-watch="" style="height: 159px;">
      <p>Pellentesque habitant morbi tristique senectus et netus et, ante.</p>
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="callout" data-equalizer-watch="" style="height: 159px;">
      <img src="assets/img/generic/rectangle-1.jpg">
    </div>
  </div>
</div></div><hr>
<h2 id="flex-grid" class="docs-heading" data-magellan-target="flex-grid">Flex Grid<a class="docs-heading-icon" href="#flex-grid"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-12">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-6 columns"</span>&gt;</span>6 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-6 columns"</span>&gt;</span>6 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-6 large-4 columns"</span>&gt;</span>12/6/4 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-6 large-8 columns"</span>&gt;</span>12/6/8 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div><div class="row display">
  <div class="small-6 columns">6 columns</div>
  <div class="small-6 columns">6 columns</div>
</div>
<div class="row display">
  <div class="medium-6 large-4 columns">12/6/4 columns</div>
  <div class="medium-6 large-8 columns">12/6/8 columns</div>
</div>

<hr>
<h2 id="flex-video" class="docs-heading" data-magellan-target="flex-video">Flex Video<a class="docs-heading-icon" href="#flex-video"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-13">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"flex-video"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">iframe</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"420"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"315"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://www.youtube.com/embed/V9gkYw35Vws"</span> <span class="hljs-attr">frameborder</span>=<span class="hljs-string">"0"</span> <span class="hljs-attr">allowfullscreen</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">iframe</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="flex-video">
  <iframe width="420" height="315" src="https://www.youtube.com/embed/V9gkYw35Vws" frameborder="0" allowfullscreen=""></iframe>
</div></div><hr>
<h2 id="float-classes" class="docs-heading" data-magellan-target="float-classes">Float Classes<a class="docs-heading-icon" href="#float-classes"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-14">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"callout clearfix"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button float-left"</span>&gt;</span>Left<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button float-right"</span>&gt;</span>Right<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="callout clearfix">
  <a class="button float-left">Left</a>
  <a class="button float-right">Right</a>
</div></div><hr>
<h2 id="forms" class="docs-heading" data-magellan-target="forms">Forms<a class="docs-heading-icon" href="#forms"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-15">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Input Label
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">".small-12.columns"</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"exampleHelpText"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"help-text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleHelpText"</span>&gt;</span>Here's how you use this input field!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>
    How many puppies?
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"100"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>
    What books did you read over summer break?
    <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"None"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Select Menu
    <span class="hljs-tag">&lt;<span class="hljs-name">select</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"husker"</span>&gt;</span>Husker<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"starbuck"</span>&gt;</span>Starbuck<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"hotdog"</span>&gt;</span>Hot Dog<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"apollo"</span>&gt;</span>Apollo<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">legend</span>&gt;</span>Choose Your Favorite<span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pokemon"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Red"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pokemonRed"</span> <span class="hljs-attr">required</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pokemonRed"</span>&gt;</span>Red<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pokemon"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Blue"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pokemonBlue"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pokemonBlue"</span>&gt;</span>Blue<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"pokemon"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Yellow"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"pokemonYellow"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"pokemonYellow"</span>&gt;</span>Yellow<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">legend</span>&gt;</span>Check these out<span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"checkbox1"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"checkbox1"</span>&gt;</span>Checkbox 1<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"checkbox2"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"checkbox2"</span>&gt;</span>Checkbox 2<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"checkbox3"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"checkbox3"</span>&gt;</span>Checkbox 3<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-3 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"middle-label"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-right middle"</span>&gt;</span>Label<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-9 columns"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"middle-label"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Right- and middle-aligned text input"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-label"</span>&gt;</span>$<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-field"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"url"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-button button"</span>&gt;</span>Submit<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><form>
  <label>Input Label
    <input type="text" placeholder=".small-12.columns" aria-describedby="exampleHelpText">
  </label>
  <p class="help-text" id="exampleHelpText">Here's how you use this input field!</p>
  <label>
    How many puppies?
    <input type="number" value="100">
  </label>
  <label>
    What books did you read over summer break?
    <textarea placeholder="None"></textarea>
  </label>
  <label>Select Menu
    <select>
      <option value="husker">Husker</option>
      <option value="starbuck">Starbuck</option>
      <option value="hotdog">Hot Dog</option>
      <option value="apollo">Apollo</option>
    </select>
  </label>
  <div class="row">
    <fieldset class="large-6 columns">
      <legend>Choose Your Favorite</legend>
      <input type="radio" name="pokemon" value="Red" id="pokemonRed" required=""><label for="pokemonRed">Red</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
      <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
    </fieldset>
    <fieldset class="large-6 columns">
      <legend>Check these out</legend>
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
      <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
      <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
    </fieldset>
  </div>
  <div class="row">
    <div class="small-3 columns">
      <label for="middle-label" class="text-right middle">Label</label>
    </div>
    <div class="small-9 columns">
      <input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
    </div>
  </div>
  <div class="input-group">
    <span class="input-group-label">$</span>
    <input class="input-group-field" type="url">
    <a class="input-group-button button">Submit</a>
  </div>
</form></div><hr>
<h2 id="grid" class="docs-heading" data-magellan-target="grid">Grid<a class="docs-heading-icon" href="#grid"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-16">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-2 medium-3 large-4 columns"</span>&gt;</span>2/3/4 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-4 medium-3 large-4 columns"</span>&gt;</span>4/3/4 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-6 large-4 columns"</span>&gt;</span>6/6/4 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-3 columns"</span>&gt;</span>12/12/3 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-6 columns"</span>&gt;</span>12/12/6 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"large-3 columns"</span>&gt;</span>12/12/3 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-6 large-2 columns"</span>&gt;</span>6/6/2 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-6 large-8 columns"</span>&gt;</span>6/6/8 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-12 large-2 columns"</span>&gt;</span>12/12/2 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-3 columns"</span>&gt;</span>3 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-9 columns"</span>&gt;</span>9 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-8 large-4 columns"</span>&gt;</span>12/8/4 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"medium-4 large-8 columns"</span>&gt;</span>12/4/8 columns<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div><div class="row display">
  <div class="small-2 medium-3 large-4 columns">2/3/4 columns</div>
  <div class="small-4 medium-3 large-4 columns">4/3/4 columns</div>
  <div class="small-6 large-4 columns">6/6/4 columns</div>
</div>
<div class="row display">
  <div class="large-3 columns">12/12/3 columns</div>
  <div class="large-6 columns">12/12/6 columns</div>
  <div class="large-3 columns">12/12/3 columns</div>
</div>
<div class="row display">
  <div class="small-6 large-2 columns">6/6/2 columns</div>
  <div class="small-6 large-8 columns">6/6/8 columns</div>
  <div class="small-12 large-2 columns">12/12/2 columns</div>
</div>
<div class="row display">
  <div class="small-3 columns">3 columns</div>
  <div class="small-9 columns">9 columns</div>
</div>
<div class="row display">
  <div class="medium-8 large-4 columns">12/8/4 columns</div>
  <div class="medium-4 large-8 columns">12/4/8 columns</div>
</div>

<hr>
<h2 id="interchange" class="docs-heading" data-magellan-target="interchange">Interchange<a class="docs-heading-icon" href="#interchange"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-17">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">data-interchange</span>=<span class="hljs-string">"[assets/img/interchange/small.jpg, small], [assets/img/interchange/medium.jpg, medium], [assets/img/interchange/large.jpg, large]"</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><img data-interchange="[assets/img/interchange/small.jpg, small], [assets/img/interchange/medium.jpg, medium], [assets/img/interchange/large.jpg, large]" src="assets/img/interchange/medium.jpg"></div><hr>
<h2 id="label" class="docs-heading" data-magellan-target="label">Label<a class="docs-heading-icon" href="#label"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-18">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"secondary label"</span>&gt;</span>Secondary Label<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"success label"</span>&gt;</span>Success Label<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"alert label"</span>&gt;</span>Alert Label<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"warning label"</span>&gt;</span>Warning Label<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><span class="secondary label">Secondary Label</span>
<span class="success label">Success Label</span>
<span class="alert label">Alert Label</span>
<span class="warning label">Warning Label</span></div><hr>
<h2 id="magellan" class="docs-heading" data-magellan-target="magellan">Magellan<a class="docs-heading-icon" href="#magellan"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-19">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"horizontal menu"</span> <span class="hljs-attr">data-magellan</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#first"</span>&gt;</span>First Arrival<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#second"</span>&gt;</span>Second Arrival<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#third"</span>&gt;</span>Third Arrival<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"sections"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"first"</span> <span class="hljs-attr">data-magellan-target</span>=<span class="hljs-string">"first"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>First section<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Duis scelerisque ligula ut metus rhoncus scelerisque. Integer ut egestas metus. Nulla facilisi. Aenean luctus magna lobortis ligula rhoncus, sit amet lacinia lorem sagittis. Sed ultrices at metus id aliquet. Vestibulum in condimentum quam, id ornare erat. Vivamus nec justo quis ex fringilla condimentum ac non quam.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"second"</span> <span class="hljs-attr">data-magellan-target</span>=<span class="hljs-string">"second"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Second section<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Sed vulputate, felis interdum molestie viverra, neque urna placerat dui, ac efficitur est magna eu tellus. Nunc sodales consequat eros at bibendum. Vestibulum hendrerit gravida elit non eleifend. Nunc at vehicula ipsum. Vestibulum eu suscipit felis. Proin ipsum felis, consequat congue quam ac, efficitur tincidunt ex. Morbi accumsan sem iaculis nunc malesuada tincidunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"third"</span> <span class="hljs-attr">data-magellan-target</span>=<span class="hljs-string">"third"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Second section<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Aliquam orci orci, maximus a pulvinar id, tincidunt a neque. Suspendisse eros diam, finibus et faucibus ac, suscipit feugiat orci. Morbi scelerisque sem id blandit malesuada. Donec suscipit tincidunt dolor in blandit. Nam rhoncus risus vitae lacinia dictum. Cras lobortis, nulla non faucibus mattis, tellus nibh condimentum eros, posuere volutpat arcu risus vel ante. In ut ullamcorper eros, et vestibulum risus. Fusce auctor risus vitae diam viverra tincidunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">section</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div><ul class="horizontal menu" data-magellan="rvd9ck-magellan" data-resize="41auhw-magellan" data-scroll="41auhw-magellan" id="41auhw-magellan" data-events="scroll">
  <li><a href="#first">First Arrival</a></li>
  <li><a href="#second">Second Arrival</a></li>
  <li><a href="#third">Third Arrival</a></li>
</ul>

<hr>
<h2 id="media-object" class="docs-heading" data-magellan-target="media-object">Media Object<a class="docs-heading-icon" href="#media-object"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-20">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"media-object"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"media-object-section"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>= <span class="hljs-string">"http://placeimg.com/200/200/people"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"media-object-section"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Dreams feel real while we're in them.<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="media-object">
  <div class="media-object-section">
    <img src="http://placeimg.com/200/200/people">
  </div>
  <div class="media-object-section">
    <h4>Dreams feel real while we're in them.</h4>
    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
  </div>
</div></div><hr>
<h2 id="menu" class="docs-heading" data-magellan-target="menu">Menu<a class="docs-heading-icon" href="#menu"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-21">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Four<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu icon-top"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fi-list"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fi-list"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fi-list"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fi-list"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Four<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="menu">
  <li><a href="#0">One</a></li>
  <li><a href="#0">Two</a></li>
  <li><a href="#0">Three</a></li>
  <li><a href="#0">Four</a></li>
</ul>

<ul class="menu icon-top">
  <li><a href="#0"><i class="fi-list"></i> <span>One</span></a></li>
  <li><a href="#0"><i class="fi-list"></i> <span>Two</span></a></li>
  <li><a href="#0"><i class="fi-list"></i> <span>Three</span></a></li>
  <li><a href="#0"><i class="fi-list"></i> <span>Four</span></a></li>
</ul></div><hr>
<h2 id="off-canvas" class="docs-heading" data-magellan-target="off-canvas">Off-canvas<a class="docs-heading-icon" href="#off-canvas"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-22">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"off-canvas-wrapper"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"off-canvas-wrapper-inner"</span> <span class="hljs-attr">data-off-canvas-wrapper</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"off-canvas position-left"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"offCanvasLeft"</span> <span class="hljs-attr">data-off-canvas</span>&gt;</span>
        <span class="hljs-comment">&lt;!-- left off-canvas markup --&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"off-canvas position-right"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"offCanvasRight"</span> <span class="hljs-attr">data-off-canvas</span> <span class="hljs-attr">data-position</span>=<span class="hljs-string">"right"</span>&gt;</span>
        <span class="hljs-comment">&lt;!-- right off-canvas markup --&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"off-canvas-content"</span> <span class="hljs-attr">data-off-canvas-content</span>&gt;</span>
        <span class="hljs-comment">&lt;!-- page content --&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span></code></pre></div><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-23">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"offCanvasLeft"</span>&gt;</span>Open Menu<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><button type="button" class="button" data-toggle="offCanvasLeft" aria-expanded="false" aria-controls="offCanvasLeft">Open Menu</button></div><hr>
<h2 id="orbit" class="docs-heading" data-magellan-target="orbit">Orbit<a class="docs-heading-icon" href="#orbit"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-24">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"region"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Favorite Space Pictures"</span> <span class="hljs-attr">data-orbit</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-container"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-previous"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"previous"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Previous Slide<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>&amp;#9664;<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-next"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"next"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Next Slide<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>&amp;#9654;<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"is-active orbit-slide"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>You can also throw some text in here!<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>This Orbit slide has chill<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-slide"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>You can also throw some text in here!<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>This Orbit slide has chill<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-slide"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>You can also throw some text in here!<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>This Orbit slide has chill<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-slide"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>You can also throw some text in here!<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span>This Orbit slide has chill<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">nav</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"orbit-bullets"</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"is-active"</span> <span class="hljs-attr">data-slide</span>=<span class="hljs-string">"0"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>First slide details.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Current Slide<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">data-slide</span>=<span class="hljs-string">"1"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Second slide details.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">data-slide</span>=<span class="hljs-string">"2"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Third slide details.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">data-slide</span>=<span class="hljs-string">"3"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Fourth slide details.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">nav</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit="ayt3h3-orbit">
  <ul class="orbit-container" tabindex="0" style="height: 185px;">
    <button class="orbit-previous" aria-label="previous" tabindex="0"><span class="show-for-sr">Previous Slide</span>◀</button>
    <button class="orbit-next" aria-label="next" tabindex="0"><span class="show-for-sr">Next Slide</span>▶</button>
    <li class="orbit-slide" data-slide="0" style="max-height: 185px; display: none; position: relative; top: 0px;">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
    <li class="orbit-slide is-active" data-slide="1" style="position: relative; max-height: 185px; top: 0px; display: block;" aria-live="polite">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
    <li class="orbit-slide" data-slide="2" style="position: relative; max-height: 185px; top: 0px; display: none;">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
    <li class="orbit-slide" data-slide="3" style="position: relative; max-height: 185px; top: 0px; display: none;">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
  </ul>
  <nav class="orbit-bullets">
   <button class="" data-slide="0"><span class="show-for-sr">First slide details.</span></button>
   <button data-slide="1" class="is-active"><span class="show-for-sr">Second slide details.</span><span class="show-for-sr">Current Slide</span></button>
   <button data-slide="2" class=""><span class="show-for-sr">Third slide details.</span></button>
   <button data-slide="3" class=""><span class="show-for-sr">Fourth slide details.</span></button>
 </nav>
</div></div><hr>
<h2 id="pagination" class="docs-heading" data-magellan-target="pagination">Pagination<a class="docs-heading-icon" href="#pagination"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-25">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"pagination"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"navigation"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Pagination"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"disabled"</span>&gt;</span>Previous <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>page<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"current"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>You're on page<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Page 2"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Page 3"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Page 4"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"ellipsis"</span> <span class="hljs-attr">aria-hidden</span>=<span class="hljs-string">"true"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Page 12"</span>&gt;</span>12<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Page 13"</span>&gt;</span>13<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Next page"</span>&gt;</span>Next <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>page<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="pagination" role="navigation" aria-label="Pagination">
  <li class="disabled">Previous <span class="show-for-sr">page</span></li>
  <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
  <li><a href="#0" aria-label="Page 2">2</a></li>
  <li><a href="#0" aria-label="Page 3">3</a></li>
  <li><a href="#0" aria-label="Page 4">4</a></li>
  <li class="ellipsis" aria-hidden="true"></li>
  <li><a href="#0" aria-label="Page 12">12</a></li>
  <li><a href="#0" aria-label="Page 13">13</a></li>
  <li><a href="#0" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul></div><hr>
<h2 id="progress-bar" class="docs-heading" data-magellan-target="progress-bar">Progress Bar<a class="docs-heading-icon" href="#progress-bar"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-26">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"success progress"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"progressbar"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"0"</span> <span class="hljs-attr">aria-valuenow</span>=<span class="hljs-string">"25"</span> <span class="hljs-attr">aria-valuemin</span>=<span class="hljs-string">"0"</span> <span class="hljs-attr">aria-valuetext</span>=<span class="hljs-string">"25 percent"</span> <span class="hljs-attr">aria-valuemax</span>=<span class="hljs-string">"100"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"progress-meter"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"width: 25%"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"progress-meter-text"</span>&gt;</span>25%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"warning progress"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"progress-meter"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"width: 50%"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"progress-meter-text"</span>&gt;</span>50%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"alert progress"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"progress-meter"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"width: 75%"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"progress-meter-text"</span>&gt;</span>75%<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="success progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
  <div class="progress-meter" style="width: 25%">
    <p class="progress-meter-text">25%</p>
  </div>
</div>

<div class="warning progress">
  <div class="progress-meter" style="width: 50%">
    <p class="progress-meter-text">50%</p>
  </div>
</div>

<div class="alert progress">
  <div class="progress-meter" style="width: 75%">
    <p class="progress-meter-text">75%</p>
  </div>
</div></div><hr>
<h2 id="responsive-menu" class="docs-heading" data-magellan-target="responsive-menu">Responsive Menu<a class="docs-heading-icon" href="#responsive-menu"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-27">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"vertical medium-horizontal menu"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="vertical medium-horizontal menu">
  <li><a href="#0">Item 1</a></li>
  <li><a href="#0">Item 2</a></li>
  <li><a href="#0">Item 3</a></li>
</ul></div><hr>
<h2 id="responsive-toggle" class="docs-heading" data-magellan-target="responsive-toggle">Responsive Toggle<a class="docs-heading-icon" href="#responsive-toggle"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-28">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"title-bar"</span> <span class="hljs-attr">data-responsive-toggle</span>=<span class="hljs-string">"example-menu"</span> <span class="hljs-attr">data-hide-for</span>=<span class="hljs-string">"medium"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu-icon"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">data-toggle</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"title-bar-title"</span>&gt;</span>Menu<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"top-bar"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-menu"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"top-bar-left"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown menu"</span> <span class="hljs-attr">data-dropdown-menu</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu-text"</span>&gt;</span>Site Title<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"has-submenu"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"submenu menu vertical"</span> <span class="hljs-attr">data-submenu</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"top-bar-right"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"search"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Search"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>Search<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" style="display: none;">
  <button class="menu-icon" type="button" data-toggle=""></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu="grsclz-dropdown-menu" role="menubar">
      <li class="menu-text" role="menuitem">Site Title</li>
      <li class="has-submenu is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="One">
        <a href="#0" tabindex="0">One</a>
        <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" aria-hidden="true" role="menu">
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">One</a></li>
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Two</a></li>
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Three</a></li>
        </ul>
      </li>
      <li role="menuitem"><a href="#0">Two</a></li>
      <li role="menuitem"><a href="#0">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div></div><hr>
<h2 id="reveal" class="docs-heading" data-magellan-target="reveal">Reveal<a class="docs-heading-icon" href="#reveal"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-29">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">data-open</span>=<span class="hljs-string">"exampleModal1"</span>&gt;</span>Click me for a modal<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"reveal"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"exampleModal1"</span> <span class="hljs-attr">data-reveal</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Awesome. I Have It.<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"lead"</span>&gt;</span>Your couch. It is mine.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>I'm a cool paragraph that lives inside of an even cooler modal. Wins!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"close-button"</span> <span class="hljs-attr">data-close</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Close reveal"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">aria-hidden</span>=<span class="hljs-string">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><p><a data-open="exampleModal1" aria-controls="exampleModal1" aria-haspopup="true" tabindex="0">Click me for a modal</a></p>

</div><hr>
<h2 id="slider" class="docs-heading" data-magellan-target="slider">Slider<a class="docs-heading-icon" href="#slider"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-30">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider"</span> <span class="hljs-attr">data-slider</span> <span class="hljs-attr">data-initial-start</span>=<span class="hljs-string">'50'</span> <span class="hljs-attr">data-end</span>=<span class="hljs-string">'200'</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-handle"</span>  <span class="hljs-attr">data-slider-handle</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"slider"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-fill"</span> <span class="hljs-attr">data-slider-fill</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider vertical"</span> <span class="hljs-attr">data-slider</span> <span class="hljs-attr">data-initial-start</span>=<span class="hljs-string">'25'</span> <span class="hljs-attr">data-end</span>=<span class="hljs-string">'200'</span> <span class="hljs-attr">data-vertical</span>=<span class="hljs-string">"true"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-handle"</span> <span class="hljs-attr">data-slider-handle</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"slider"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-fill"</span> <span class="hljs-attr">data-slider-fill</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider"</span> <span class="hljs-attr">data-slider</span> <span class="hljs-attr">data-initial-start</span>=<span class="hljs-string">'25'</span> <span class="hljs-attr">data-initial-end</span>=<span class="hljs-string">'75'</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-handle"</span> <span class="hljs-attr">data-slider-handle</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"slider"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-fill"</span> <span class="hljs-attr">data-slider-fill</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"slider-handle"</span> <span class="hljs-attr">data-slider-handle</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"slider"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="slider" data-slider="bk0f3b-slider" data-initial-start="50" data-end="200">
  <span class="slider-handle" data-slider-handle="" role="slider" tabindex="0" aria-controls="n5us2u-slider" aria-valuemax="200" aria-valuemin="0" aria-valuenow="50" aria-orientation="horizontal" style="left: 24.23%;"></span>
  <span class="slider-fill" data-slider-fill="" style="width: 25%;"></span>
  <input type="hidden" id="n5us2u-slider" max="200" min="0" step="1" value="50">
</div>

<div class="slider vertical" data-slider="hl1a0k-slider" data-initial-start="25" data-end="200" data-vertical="true">
  <span class="slider-handle" data-slider-handle="" role="slider" tabindex="0" aria-controls="3go7uv-slider" aria-valuemax="200" aria-valuemin="0" aria-valuenow="25" aria-orientation="vertical" style="top: 11.54%;"></span>
  <span class="slider-fill" data-slider-fill="" style="height: 13%;"></span>
  <input type="hidden" id="3go7uv-slider" max="200" min="0" step="1" value="25">
</div>

<div class="slider" data-slider="0bmrlv-slider" data-initial-start="25" data-initial-end="75">
  <span class="slider-handle" data-slider-handle="" role="slider" tabindex="0" aria-controls="upogp6-slider" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" aria-orientation="horizontal" style="left: 24.23%;"></span>
  <span class="slider-fill" data-slider-fill="" style="width: 0px; min-width: 50.7%; left: 24.23%;"></span>
  <span class="slider-handle" data-slider-handle="" role="slider" tabindex="0" aria-valuenow="75" aria-controls="ufavoi-slider" aria-valuemax="100" aria-valuemin="0" aria-orientation="horizontal" style="left: 72.7%;"></span>
  <input type="hidden" id="upogp6-slider" max="100" min="0" step="1" value="25">
  <input type="hidden" value="75" id="ufavoi-slider" max="100" min="0" step="1">
</div></div><hr>
<h2 id="sticky" class="docs-heading" data-magellan-target="sticky">Sticky<a class="docs-heading-icon" href="#sticky"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-31">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"columns small-12"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"columns small-6"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example1"</span> <span class="hljs-attr">data-something</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"doodle"</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"columns small-6 right"</span> <span class="hljs-attr">data-sticky-container</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"sticky"</span> <span class="hljs-attr">data-sticky</span> <span class="hljs-attr">data-anchor</span>=<span class="hljs-string">"example1"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/generic/rectangle-3.jpg"</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="row">
  <div class="columns small-12">
    <div class="columns small-6" id="example1" data-something="">
      <p id="doodle">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="columns small-6 right sticky-container" data-sticky-container="" style="height: 153.047px;">
      <div class="sticky" data-sticky="kc2cys-sticky" data-anchor="example1" data-resize="zwe1jy-sticky" data-events="resize" style="max-width: 238.125px;">
        <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
      </div>
    </div>
  </div>
</div></div><hr>
<h2 id="switch" class="docs-heading" data-magellan-target="switch">Switch<a class="docs-heading-icon" href="#switch"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-32">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch tiny"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"tinySwitch"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"exampleSwitch"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch-paddle"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"tinySwitch"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Tiny Sandwiches Enabled<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch small"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"smallSwitch"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"exampleSwitch"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch-paddle"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"smallSwitch"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Small Portions Only<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch large"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"largeSwitch"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"exampleSwitch"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"switch-paddle"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"largeSwitch"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>Show Large Elephants<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="switch tiny">
  <input class="switch-input" id="tinySwitch" type="checkbox" name="exampleSwitch">
  <label class="switch-paddle" for="tinySwitch">
    <span class="show-for-sr">Tiny Sandwiches Enabled</span>
  </label>
</div>

<div class="switch small">
  <input class="switch-input" id="smallSwitch" type="checkbox" name="exampleSwitch">
  <label class="switch-paddle" for="smallSwitch">
    <span class="show-for-sr">Small Portions Only</span>
  </label>
</div>

<div class="switch large">
  <input class="switch-input" id="largeSwitch" type="checkbox" name="exampleSwitch">
  <label class="switch-paddle" for="largeSwitch">
    <span class="show-for-sr">Show Large Elephants</span>
  </label>
</div></div><hr>
<h2 id="table" class="docs-heading" data-magellan-target="table">Table<a class="docs-heading-icon" href="#table"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-33">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">table</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"200"</span>&gt;</span>Table Header<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Header<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"150"</span>&gt;</span>Table Header<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"150"</span>&gt;</span>Table Header<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is longer content Donec id elit non mi porta gravida at eget metus.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Content Goes Here<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><table>
  <thead>
    <tr>
      <th width="200">Table Header</th>
      <th>Table Header</th>
      <th width="150">Table Header</th>
      <th width="150">Table Header</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
  </tbody>
</table></div><hr>
<h2 id="tabs" class="docs-heading" data-magellan-target="tabs">Tabs<a class="docs-heading-icon" href="#tabs"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-34">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs"</span> <span class="hljs-attr">data-tabs</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-tabs"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-title is-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel1"</span> <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"true"</span>&gt;</span>Tab 1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-title"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel2"</span>&gt;</span>Tab 2<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-title"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel3"</span>&gt;</span>Tab 3<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-title"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel4"</span>&gt;</span>Tab 4<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-title"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel5"</span>&gt;</span>Tab 5<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-title"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#panel6"</span>&gt;</span>Tab 6<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-content"</span> <span class="hljs-attr">data-tabs-content</span>=<span class="hljs-string">"example-tabs"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-panel is-active"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel1"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>one<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Check me out! I'm a super cool Tab panel with text content!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-panel"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel2"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>two<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/generic/rectangle-7.jpg"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-panel"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel3"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>three<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Check me out! I'm a super cool Tab panel with text content!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-panel"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel4"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>four<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/generic/rectangle-2.jpg"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-panel"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel5"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>five<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Check me out! I'm a super cool Tab panel with text content!<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tabs-panel"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"panel6"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>six<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/generic/rectangle-8.jpg"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><ul class="tabs" data-tabs="vlp1ff-tabs" id="example-tabs">
  <li class="tabs-title is-active" role="presentation"><a href="#panel1" aria-selected="true" role="tab" aria-controls="panel1" id="panel1-label">Tab 1</a></li>
  <li class="tabs-title" role="presentation"><a href="#panel2" role="tab" aria-controls="panel2" aria-selected="false" id="panel2-label">Tab 2</a></li>
  <li class="tabs-title" role="presentation"><a href="#panel3" role="tab" aria-controls="panel3" aria-selected="false" id="panel3-label">Tab 3</a></li>
  <li class="tabs-title" role="presentation"><a href="#panel4" role="tab" aria-controls="panel4" aria-selected="false" id="panel4-label">Tab 4</a></li>
  <li class="tabs-title" role="presentation"><a href="#panel5" role="tab" aria-controls="panel5" aria-selected="false" id="panel5-label">Tab 5</a></li>
  <li class="tabs-title" role="presentation"><a href="#panel6" role="tab" aria-controls="panel6" aria-selected="false" id="panel6-label">Tab 6</a></li>
</ul>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1" role="tabpanel" aria-hidden="false" aria-labelledby="panel1-label">
    <p>one</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel2" role="tabpanel" aria-hidden="true" aria-labelledby="panel2-label">
    <p>two</p>
    <img class="thumbnail" src="assets/img/generic/rectangle-7.jpg">
  </div>
  <div class="tabs-panel" id="panel3" role="tabpanel" aria-hidden="true" aria-labelledby="panel3-label">
    <p>three</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel4" role="tabpanel" aria-hidden="true" aria-labelledby="panel4-label">
    <p>four</p>
    <img class="thumbnail" src="assets/img/generic/rectangle-2.jpg">
  </div>
  <div class="tabs-panel" id="panel5" role="tabpanel" aria-hidden="true" aria-labelledby="panel5-label">
    <p>five</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel6" role="tabpanel" aria-hidden="true" aria-labelledby="panel6-label">
    <p>six</p>
    <img class="thumbnail" src="assets/img/generic/rectangle-8.jpg">
  </div>
</div></div><hr>
<h2 id="thumbnail" class="docs-heading" data-magellan-target="thumbnail">Thumbnail<a class="docs-heading-icon" href="#thumbnail"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-35">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-4 columns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/thumbnail/01.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Photo of Uranus."</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-4 columns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/thumbnail/02.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Photo of Neptune."</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"small-4 columns"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"thumbnail"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"assets/img/thumbnail/03.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Photo of Pluto."</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="row">
  <div class="small-4 columns">
    <img class="thumbnail" src="assets/img/thumbnail/01.jpg" alt="Photo of Uranus.">
  </div>
  <div class="small-4 columns">
    <img class="thumbnail" src="assets/img/thumbnail/02.jpg" alt="Photo of Neptune.">
  </div>
  <div class="small-4 columns">
    <img class="thumbnail" src="assets/img/thumbnail/03.jpg" alt="Photo of Pluto.">
  </div>
</div></div><hr>
<h2 id="title-bar" class="docs-heading" data-magellan-target="title-bar">Title Bar<a class="docs-heading-icon" href="#title-bar"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-36">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"title-bar"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"title-bar-left"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu-icon"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"title-bar-title"</span>&gt;</span>Foundation<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"title-bar-right"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu-icon"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="title-bar">
  <div class="title-bar-left">
    <button class="menu-icon" type="button"></button>
    <span class="title-bar-title">Foundation</span>
  </div>
  <div class="title-bar-right">
    <button class="menu-icon" type="button"></button>
  </div>
</div></div><hr>
<h2 id="toggler" class="docs-heading" data-magellan-target="toggler">Toggler<a class="docs-heading-icon" href="#toggler"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-37">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"menuBar"</span>&gt;</span>Expand!<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"menuBar"</span> <span class="hljs-attr">data-toggler</span>=<span class="hljs-string">".expanded"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Four<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><p><a data-toggle="menuBar" aria-controls="menuBar">Expand!</a></p>

<ul class="menu" id="menuBar" data-toggler=".expanded" aria-expanded="true">
  <li><a href="#0">One</a></li>
  <li><a href="#0">Two</a></li>
  <li><a href="#0">Three</a></li>
  <li><a href="#0">Four</a></li>
</ul></div><hr>
<h2 id="tooltip" class="docs-heading" data-magellan-target="tooltip">Tooltip<a class="docs-heading-icon" href="#tooltip"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-38">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>The <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">data-tooltip</span> <span class="hljs-attr">aria-haspopup</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"has-tip"</span> <span class="hljs-attr">data-disable-hover</span>=<span class="hljs-string">'false'</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">1</span> <span class="hljs-attr">title</span>=<span class="hljs-string">"Fancy word for a beetle."</span>&gt;</span>scarabaeus<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet. Legrand immediately took the scythe, and cleared with it a circular space, three or four yards in diameter, just beneath the insect, and, having accomplished this, ordered Jupiter to let go the string and come down from the tree.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><p>The <span data-tooltip="rrvty9-tooltip" aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="" aria-describedby="cl6gho-tooltip" data-yeti-box="cl6gho-tooltip" data-toggle="cl6gho-tooltip" data-resize="cl6gho-tooltip" data-events="resize">scarabaeus</span> hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet. Legrand immediately took the scythe, and cleared with it a circular space, three or four yards in diameter, just beneath the insect, and, having accomplished this, ordered Jupiter to let go the string and come down from the tree.</p></div><hr>
<h2 id="top-bar" class="docs-heading" data-magellan-target="top-bar">Top Bar<a class="docs-heading-icon" href="#top-bar"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-39">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"top-bar"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"top-bar-left"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown menu"</span> <span class="hljs-attr">data-dropdown-menu</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu-text"</span>&gt;</span>Site Title<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"has-submenu"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"submenu menu vertical"</span> <span class="hljs-attr">data-submenu</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#0"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"top-bar-right"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"search"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Search"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button"</span>&gt;</span>Search<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu="64ip34-dropdown-menu" role="menubar">
      <li class="menu-text" role="menuitem">Site Title</li>
      <li class="has-submenu is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="One">
        <a href="#0" tabindex="0">One</a>
        <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" aria-hidden="true" role="menu">
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">One</a></li>
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Two</a></li>
          <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#0">Three</a></li>
        </ul>
      </li>
      <li role="menuitem"><a href="#0">Two</a></li>
      <li role="menuitem"><a href="#0">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div></div><hr>
<h2 id="visibility-classes" class="docs-heading" data-magellan-target="visibility-classes">Visibility Classes<a class="docs-heading-icon" href="#visibility-classes"></a></h2><a class="docs-code-toggle">Toggle Code</a><div class="docs-code kitchen-sink" data-docs-code="" style="display: none;"><button class="docs-code-copy" id="copy-btn-40">Copy</button><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>You are on a small screen or larger.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-medium"</span>&gt;</span>You are on a medium screen or larger.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-large"</span>&gt;</span>You are on a large screen or larger.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-small-only"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>definitely<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a small screen.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-medium-only"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>definitely<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a medium screen.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-large-only"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>definitely<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a large screen.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hide-for-medium"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>not<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a medium screen or larger.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hide-for-large"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>not<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a large screen or larger.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hide-for-small-only"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>definitely not<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a small screen.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hide-for-medium-only"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>definitely not<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a medium screen.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hide-for-large-only"</span>&gt;</span>You are <span class="hljs-tag">&lt;<span class="hljs-name">em</span>&gt;</span>definitely not<span class="hljs-tag">&lt;/<span class="hljs-name">em</span>&gt;</span> on a large screen.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hide"</span>&gt;</span>Can't touch this.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"invisible"</span>&gt;</span>Can sort of touch this.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-landscape"</span>&gt;</span>You are in landscape orientation.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-portrait"</span>&gt;</span>You are in portrait orientation.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-for-sr"</span>&gt;</span>This text can only be read by a screen reader.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>There's a line of text above this one, you just can't see it.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">aria-hidden</span>=<span class="hljs-string">"true"</span>&gt;</span>This text can be seen, but won't be read by a screen reader.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"show-on-focus"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#mainContent"</span>&gt;</span>Skip to Content<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">header</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"header"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"banner"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">header</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">main</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"mainContent"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"main"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"0"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">main</span>&gt;</span></code></pre></div>

<div class="docs-code-live"><p>You are on a small screen or larger.</p>
<p class="show-for-medium">You are on a medium screen or larger.</p>
<p class="show-for-large">You are on a large screen or larger.</p>
<p class="show-for-small-only">You are <em>definitely</em> on a small screen.</p>
<p class="show-for-medium-only">You are <em>definitely</em> on a medium screen.</p>
<p class="show-for-large-only">You are <em>definitely</em> on a large screen.</p>

<p class="hide-for-medium">You are <em>not</em> on a medium screen or larger.</p>
<p class="hide-for-large">You are <em>not</em> on a large screen or larger.</p>
<p class="hide-for-small-only">You are <em>definitely not</em> on a small screen.</p>
<p class="hide-for-medium-only">You are <em>definitely not</em> on a medium screen.</p>
<p class="hide-for-large-only">You are <em>definitely not</em> on a large screen.</p>
<p class="hide">Can't touch this.</p>

<p class="invisible">Can sort of touch this.</p>

<p class="show-for-landscape">You are in landscape orientation.</p>
<p class="show-for-portrait">You are in portrait orientation.</p>

<p class="show-for-sr">This text can only be read by a screen reader.</p>
<p>There's a line of text above this one, you just can't see it.</p>

<p aria-hidden="true">This text can be seen, but won't be read by a screen reader.</p>

<p><a class="show-on-focus" href="#mainContent">Skip to Content</a></p>
<header id="header" role="banner">
</header>
<main id="mainContent" role="main" tabindex="0">
</main></div>




</div>

<div class="large-3 columns sticky-container" data-sticky-container="" style="height: 223px;">
  <nav class="columns docs-toc-wrap sticky is-anchored is-at-top" data-sticky="9cqlwm-sticky" data-anchor="docs" data-sticky-on="large" data-resize="9kvzd9-sticky" data-events="resize" style="max-width: 521.25px; margin-top: 0px; top: 0px; bottom: auto;">
    <div class="docs-toc hide" id="docsTOC">
      <ul class="vertical menu" data-docs-toc="" data-resize="dpzil5-magellan" data-scroll="dpzil5-magellan" id="dpzil5-magellan" data-magellan="91tozz-magellan" data-events="scroll">
        <li class="docs-nav-title">On this page:</li>
      <li><a href="#abide" class="active">Abide</a></li><li><a href="#accordion" class="">Accordion</a></li><li><a href="#accordion-menu" class="">Accordion Menu</a></li><li><a href="#badge" class="">Badge</a></li><li><a href="#breadcrumbs" class="">Breadcrumbs</a></li><li><a href="#button" class="">Button</a></li><li><a href="#callout">Callout</a></li><li><a href="#close-button">Close Button</a></li><li><a href="#drilldown-menu">Drilldown Menu</a></li><li><a href="#dropdown-menu">Dropdown Menu</a></li><li><a href="#dropdown-pane">Dropdown Pane</a></li><li><a href="#equalizer">Equalizer</a></li><li><a href="#flex-grid">Flex Grid</a></li><li><a href="#flex-video">Flex Video</a></li><li><a href="#float-classes">Float Classes</a></li><li><a href="#forms">Forms</a></li><li><a href="#grid">Grid</a></li><li><a href="#interchange">Interchange</a></li><li><a href="#label">Label</a></li><li><a href="#magellan">Magellan</a></li><li><a href="#media-object">Media Object</a></li><li><a href="#menu">Menu</a></li><li><a href="#off-canvas">Off-canvas</a></li><li><a href="#orbit">Orbit</a></li><li><a href="#pagination">Pagination</a></li><li><a href="#progress-bar">Progress Bar</a></li><li><a href="#responsive-menu">Responsive Menu</a></li><li><a href="#responsive-toggle">Responsive Toggle</a></li><li><a href="#reveal">Reveal</a></li><li><a href="#slider">Slider</a></li><li><a href="#sticky">Sticky</a></li><li><a href="#switch">Switch</a></li><li><a href="#table">Table</a></li><li><a href="#tabs">Tabs</a></li><li><a href="#thumbnail">Thumbnail</a></li><li><a href="#title-bar">Title Bar</a></li><li><a href="#toggler">Toggler</a></li><li><a href="#tooltip">Tooltip</a></li><li><a href="#top-bar">Top Bar</a></li><li><a href="#visibility-classes">Visibility Classes</a></li></ul>
    </div>
    <div class="foundation-toc-ad-unit" id="TOCAdUnit"><div class="ad-unit"><h3 class="ad-unit-title">Master Kitchen Sink</h3><p class="ad-unit-text">Get up to speed FAST, learn straight from the experts who built Foundation.</p><a class="button ad-unit-button" href="http://zurb.com/university/foundation-intro?utm_source=Foundation%20Docs&amp;utm_medium=Docs&amp;utm_content=Struggling&amp;utm_campaign=Docs%20To%20Intro">Learn More</a></div></div>
  </nav>
</div>

</div>