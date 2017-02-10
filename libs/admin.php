<h1 style="margin-bottom:30px;">API Adapter</h1>

<div id="apiadapter-editor-body"></div>

<script type="text/template" id="apiadapter-editor-template">
<form class="wrap" method="POST">
  <div v-for="(hook, hookid) in form.hooks">
    <h2>{{hook.name || "unnamed"}} <button type="button" name="button" class="button" v-on:click="deleteHook(hookid)">削除</button></h2>
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
            <select class="" name="">
              <option v-for="hook in preset.hooks" :value="hook" :name="'hooks['+hookid+'][target]'">{{hook}}</option>
            </select>
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>URL</label>
          </th>

          <td>
            <input type="text" :name="'hooks['+hookid+'][url]'" value="" placeholder="http://example.com/" class="regular-text code">
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>Use JSON</label>
          </th>

          <td>
            <label>
              <input :name="'hooks['+hookid+'][type]'" type="checkbox" value="json" checked=""> FormDataではなくJSONをポストする
            </label>
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>ヘッダー</label>
          </th>

          <td>
            <p v-for="(header, id) in hook.headers">
              <input type="text" :name="'hooks['+hookid+'][headers][key]['+id+']'" v-model="header.key"   placeholder="Key"   class="regular-text code"> :
              <input type="text" :name="'hooks['+hookid+'][headers][value]['+id+']'" v-model="header.value" placeholder="Value" class="regular-text code">
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
              <input type="text" :name="'hooks['+hookid+'][bodies][key]['+id+']'" v-model="body.key"   placeholder="Key"   class="regular-text code"> :
              <input type="text" :name="'hooks['+hookid+'][bodies][value]['+id+']'" v-model="body.value" placeholder="Value" class="regular-text code">
              <button type="button" class="button" v-on:click="deleteBody(hookid, id)">&times;</button>
            </p>
            <button type="button" name="button" class="button" v-on:click="addBody(hookid)">Add Body</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <p>
    <button type="button" name="button" class="button" v-on:click="addHook">更にフック追加</button>
    <input type="submit" name="submit" id="submit" value="変更を保存" class="button button-primary">
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
        hooks: [
          {
            name: "Notification for Slack",
            target: "",
            endpoint: "",
            type: "",
            bodies: [],
            headers: []
          }
        ]
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
