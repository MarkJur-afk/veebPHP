<h1>Muusika küsitlus</h1>
<form id="musicForm">
    <table>
        <tr>
            <td>1. Milliseid muusikuid/ansambleid sa tead? <br> <br>
                <input type="checkbox" id="queen" name="artists" value="Queen" onchange="Vali()">
                <label for="queen">Queen</label><br>
                <input type="checkbox" id="imag" name="artists" value="Imagine Dragons" onchange="Vali()">
                <label for="imag">Imagine Dragons</label><br>
                <input type="checkbox" id="bts" name="artists" value="BTS" onchange="Vali()">
                <label for="bts">Bts</label><br>
                <input type="checkbox" id="metal" name="artists" value="Metallica" onchange="Vali()">
                <label for="metal">Metallica</label>
            </td>
            <td>
                <div id="vastu1"></div>
            </td>
        </tr>

        <tr>
            <td>2. Mida arvad muusika kuulamisest koolis? <br><br>
                <textarea name="opinion" id="arvus" rows="4" placeholder="Jaga oma arvamust..." onchange="Kirjuta()"></textarea>
            </td>
            <td>
                <div id="vastu2"></div>
            </td>
        </tr>
        <tr>
            <td>3. Kui palju tunde päevas sa muusikat kuulad? <br> <br>
                0<input type="range" id="slide" name="hours" min="0" max="24" value="1" oninput="slider()">24
                <label for="slide"></label>
            </td>
            <td>
                <div id="vastu3"></div>
            </td>
        </tr>

        <tr>
            <td>4. Kas sa kuulad raadiot?
                <br>
                <br>
                <input type="radio" id="jah" name="radioListen" value="Sa ütled Jah" onchange="valiVastus()">
                <label for="jah">Jah</label>
                <input type="radio" id="ei" name="radioListen" value="Sa ütled Ei" onchange="valiVastus()">
                <label for="ei">Ei</label>
            </td>
            <td>
                <div id="vastu4"></div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="kusimus5">Milliseid raadiojaamu oskad nimetada</label><br>
                <input type="text" id="kusimus5" onchange="Raadio()">
            </td>
            <td>
                <div id="vastus5"></div>
            </td>
        </tr>

        <tr>
            <td>
                <label for="muusikaliik">6.Millist muusikat sa kõige rohkem kuulad?</label><br>
                <select id="muusikaliik" onchange="muusikaLiikValik()">
                    <option value="">Vali muusika liik</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Klassikaline">Klassikaline</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Elektronika">Elektronika</option>
                    <option value="Hip-hop">Hip-hop</option>
                </select>
            </td>
            <td>
                <div id="vastus6"></div>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <div>
        <button type="button" onclick="submitForm()">Saada</button>
        <button type="button" onclick="puhasta()">Puhasta</button>
    </div>

</form>

<div id="result"></div>
