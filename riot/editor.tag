<editor>
  <form class="wrap">
    <h2>Hook1</h2>
    <table class="form-table">
      <tbody>
        <tr>
          <th scope="row">
            <label>Target</label>
          </th>
          <td>
            <select class="" name="">
              <option each={ hook in opts.preset.hooks }>{ hook }</option>
            </select>
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>Endpoint</label>
          </th>

          <td>
            <input type="text" name="" value="" placeholder="http://example.com/" class="regular-text code">
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>Use JSON</label>
          </th>

          <td>
            <label>
              <input name="users_can_register" type="checkbox" value="1" checked=""> FormDataではなくJSONをポストする
            </label>
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>ヘッダー</label>
          </th>

          <td>
            <p>
              <input type="text" placeholder="Key"   class="regular-text code"> :
              <input type="text" placeholder="Value" class="regular-text code"><br>
            </p>
            <button type="button" name="button" class="button" onclick={ add_header }>Add Header</button>
          </td>
        </tr>

        <tr>
          <th scope="row">
            <label>Body</label>
          </th>

          <td>
            <p>
              <input type="text" placeholder="Key"   class="regular-text code"> :
              <input type="text" placeholder="Value" class="regular-text code"><br>
            </p>
            <button type="button" name="button" class="button" onclick={ add_body }>Add Body</button>
          </td>
        </tr>
      </tbody>
    </table>

    <button type="button" name="button" class="button">追加</button>
  </form>
</editor>
