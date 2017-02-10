<h1 style="margin-bottom:30px;">API Adapter</h1>

<div id="apiadapter-editor-body"></div>

<script type="text/template" id="apiadapter-editor-template">
<form class="wrap" method="POST">
  <div v-if="form.hooks.length">
    <div v-for="(hook, hookid) in form.hooks">
      <h2>{{hook.name || "unnamed"}} <button type="button" name="button" class="button" v-on:click="deleteHook(hookid)">&times;</button></h2>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row">
              <label>Name</label>
            </th>
            <td>
              <input v-model="hook.name" type="text" :name="'hooks['+hookid+'][name]'" value="" placeholder="Hook name" class="regular-text code">
            </td>
          </tr>

          <tr>
            <th scope="row">
              <label>Target</label>
            </th>
            <td>
              <select :name="'hooks['+hookid+'][target]'" v-model="hook.target">
                <option v-for="h in preset.hooks" :value="h" :name="'hooks['+hookid+'][target]'">{{h}}</option>
              </select>
            </td>
          </tr>

          <tr>
            <th scope="row">
              <label>URL</label>
            </th>

            <td>
              <input type="text" :name="'hooks['+hookid+'][url]'" v-model="hook.url" placeholder="http://example.com/" class="regular-text code">
            </td>
          </tr>

          <tr>
            <th scope="row">
              <label>Use JSON</label>
            </th>

            <td>
              <label>
                <input :name="'hooks['+hookid+'][type]'" type="checkbox" value="json" checked=""> Send JSON Data(instead of FormData).
              </label>
            </td>
          </tr>

          <tr>
            <th scope="row">
              <label>ヘッダー</label>
            </th>

            <td>
              <p v-for="(header, id) in hook.headers">
                <input type="text" :name="'hooks['+hookid+'][headers]['+id+'][key]'"   v-model="header.key"   placeholder="Key"   class="regular-text code"> :
                <input type="text" :name="'hooks['+hookid+'][headers]['+id+'][value]'" v-model="header.value" placeholder="Value" class="regular-text code">
                <button type="button" class="button" v-on:click="deleteHeader(hookid, id)">&times;</button>
              </p>
              <button type="button" name="button" class="button" v-on:click="addHeader(hookid)">Add Header</button>
            </td>
          </tr>

          <tr>
            <th scope="row">
              <label>Body</label>
            </th>

            <td>
              <p v-for="(body, id) in hook.bodies">
                <input type="text" :name="'hooks['+hookid+'][bodies]['+id+'][key]'" v-model="body.key"   placeholder="Key"   class="regular-text code"> :
                <input type="text" :name="'hooks['+hookid+'][bodies]['+id+'][value]'" v-model="body.value" placeholder="Value" class="regular-text code">
                <button type="button" class="button" v-on:click="deleteBody(hookid, id)">&times;</button>
              </p>
              <button type="button" name="button" class="button" v-on:click="addBody(hookid)">Add Body</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <p>
    <input type="hidden" name="apiadapter-editor-setting" value="1">
    <button type="button" name="button" class="button" v-on:click="addHook">Add more hook</button>
    <input type="submit" name="submit" id="submit" value="Save" class="button button-primary">
  </p>
</form>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script>
new Vue({
  el: "#apiadapter-editor-body",
  template: document.querySelector("#apiadapter-editor-template").innerText,
  data: function(){
    return {
      preset: {
        hooks: <?php echo file_get_contents(__DIR__."/../conf/hooks.json") ?>
      },
      form: {
        hooks: <?php echo json_encode($this->hooks); ?>
      }
    }
  },
  methods: {
    addHeader: function(hookid){
      this.form.hooks[hookid].headers.push({
        key: "",
        value: ""
      });
    },
    deleteHeader: function(hookid, id){
      this.form.hooks[hookid].headers.splice(id, 1);
    },

    addBody: function(hookid){
      this.form.hooks[hookid].bodies.push({
        key: "",
        value: ""
      });
    },
    deleteBody: function(hookid, id){
      this.form.hooks[hookid].bodies.splice(id, 1);
    },

    addHook: function(){
      this.form.hooks.push({
        name: "",
        headers: [],
        bodies: []
      })
    },
    deleteHook: function(hookid){
      this.form.hooks.splice(hookid, 1);
    }
  }
})
</script>
