<h1>You may add new mirror dungeon runs here.</h1>
<p>in the complete version of the site, this is NOT a seperate page, but rather a widget only certain users (me) can use.</p>

<form action="{{ route('LimbusCompany.store') }}" method="POST">
    @csrf
    <label>Floor: </label>
    <input type="number" name="floor" min="1" max="15">
    <br>

    <label>difficulty: </label>
    <select name="difficulty">
        <option value=""></option>
        <option value="normal">normal</option>
        <option value="hard">hard</option>
    </select>
    <br>

    <label>Adversity: </label>
    <input type="number" name="adversity" min="0" max="50">
    <br>

    <label>Keyword: </label>
    <select name="keyword">
        <option value=""></option>
        <option value="bleed">bleed</option>
        <option value="blunt">blunt</option>
        <option value="burn">burn</option>
        <option value="charge">charge</option>
        <option value="pierce">pierce</option>
        <option value="poise">poise</option>
        <option value="rupture">rupture</option>
        <option value="sinking">sinking</option>
        <option value="slash">slash</option>
        <option value="tremor">tremor</option>
    </select>
    <br>

    <label>Yi Sang Id: </label>
    <select name="YiSangId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Seven Assoc. South Section 6">Seven Assoc. South Section 6</option>
        <option value="Molar Office Fixer">Molar Office Fixer</option>
        <option value="The Pequod First Mate">The Pequod First Mate</option>
        <option value="Dieci Assoc. South Section 4">Dieci Assoc. South Section 4</option>
        <option value="LCE E.G.O::Lantern">LCE E.G.O::Lantern</option>
        <option value="Blade Lineage Salsu">Blade Lineage Salsu</option>
        <option value="Effloresced E.G.O::Spicebush">Effloresced E.G.O::Spicebush</option>
        <option value="W Corp. L3 Cleanup Agent">W Corp. L3 Cleanup Agent</option>
        <option value="The Ring Pointillist Student">The Ring Pointillist Student</option>
        <option value="Lobotomy E.G.O::Solemn Lament">Lobotomy E.G.O::Solemn Lament</option>
        <option value="Liu Assoc. South Section 3">Liu Assoc. South Section 3</option>
        <option value="N Corp. E.G.O::Fell Bullet">N Corp. E.G.O::Fell Bullet</option>
        <option value="Heishou Pack - Wu Branch Adept">Heishou Pack - Wu Branch Adept</option>
    </select>
    <br>

    <label>Faust Id: </label>
    <select name="FaustId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="W Corp. L2 Cleanup Agent">W Corp. L2 Cleanup Agent</option>
        <option value="Lobotomy Corp. Remnant">Lobotomy Corp. Remnant</option>
        <option value="Zwei Assoc. South Section 4">Zwei Assoc. South Section 4</option>
        <option value="Wuthering Heights Butler">Wuthering Heights Butler</option>
        <option value="The One Who Grips">The One Who Grips</option>
        <option value="Seven Assoc. South Section 4">Seven Assoc. South Section 4</option>
        <option value="Lobotomy E.G.O::Regret">Lobotomy E.G.O::Regret</option>
        <option value="Blade Lineage Salsu">Blade Lineage Salsu</option>
        <option value="Multicrack Office Rep">Multicrack Office Rep</option>
        <option value="LCE E.G.O::Ardor Blossom Star">LCE E.G.O::Ardor Blossom Star</option>
        <option value="Heishou Pack - Mao Branch Adept">Heishou Pack - Mao Branch Adept</option>
        <option value="Shi Assoc. East Section 3">Shi Assoc. East Section 3</option>
    </select>
    <br>

    <label>Don Quixote Id: </label>
    <select name="DonQuixoteId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Shi Assoc. South Section 5 Director">Shi Assoc. South Section 5 Director</option>
        <option value="N Corp. Mittelhammer">N Corp. Mittelhammer</option>
        <option value="Lobotomy E.G.O::Lantern">Lobotomy E.G.O::Lantern</option>
        <option value="Blade Lineage Salsu">Blade Lineage Salsu</option>
        <option value="W Corp. L3 Cleanup Agent">W Corp. L3 Cleanup Agent</option>
        <option value="Cinq Assoc. South Section 5 Director">Cinq Assoc. South Section 5 Director</option>
        <option value="The Middle Little Sister">The Middle Little Sister</option>
        <option value="T Corp. Class 3 Collection Staff">T Corp. Class 3 Collection Staff</option>
        <option value="The Manager Of La Manchaland">The Manager Of La Manchaland</option>
        <option value="Cinq Assoc. East Section 3">Cinq Assoc. East Section 3</option>
        <option value="Lobotomy E.G.O::In The Name of Love and Hate">Lobotomy E.G.O::In The Name of Love and Hate</option>
        <option value="Heishou Pack - Wei Branch">Heishou Pack - Wei Branch</option>
    </select>
    <br>

    <label>Ryoshu Id: </label>
    <select name="RyoshuId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Seven Assoc. South Section 6">Seven Assoc. South Section 6</option>
        <option value="LCCB Assistant Manager">LCCB Assistant Manager</option>
        <option value="Liu Assoc. South Section 4">Liu Assoc. South Section 4</option>
        <option value="District 20 Yurodivy">District 20 Yurodivy</option>
        <option value="Kurokumo Clan Wakashu">Kurokumo Clan Wakashu</option>
        <option value="R.B. Chef de Cuisine">R.B. Chef de Cuisine</option>
        <option value="W Corp L3 Cleanup Agent">W Corp L3 Cleanup Agent</option>
        <option value="Edgar Family Chief Butler">Edgar Family Chief Butler</option>
        <option value="Lobotomy E.G.O::Red Eyes & Penitence">Lobotomy E.G.O::Red Eyes & Penitence</option>
        <option value="Heishou Pack - Mao Branch">Heishou Pack - Mao Branch</option>
        <option value="N Corp. E.G.O::Contempt, Awe">N Corp. E.G.O::Contempt, Awe</option>
    </select>
    <br>

    <label>Meursault Id: </label>
    <select name="MeursaultId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Liu Assoc. South Section 6">Liu Assoc. South Section 6</option>
        <option value="Rosespanner Workshop Fixer">Rosespanner Workshop Fixer</option>
        <option value="The Middle Little Brother">The Middle Little Brother</option>
        <option value="Dead Rabbits Boss">Dead Rabbits Boss</option>
        <option value="W Corp. L2 Cleanup Agent">W Corp. L2 Cleanup Agent</option>
        <option value="N Corp. Großhammer">N Corp. Großhammer</option>
        <option value="R Corp. 4th Pack Rhino">R Corp. 4th Pack Rhino</option>
        <option value="Blade Lineage Mentor">Blade Lineage Mentor</option>
        <option value="Dieci Assoc. South Section 4 Director">Dieci Assoc. South Section 4 Director</option>
        <option value="Cinq Assoc. West Section 3">Cinq Assoc. West Section 3</option>
        <option value="The Thumb East Capo IIII">The Thumb East Capo IIII</option>
        <option value="The Prince of La Manchaland">The Prince of La Manchaland</option>
    </select>
    <br>

    <label>Hong Lu Id: </label>
    <select name="HongLuId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Kurokumo Clan Wakashu">Kurokumo Clan Wakashu</option>
        <option value="Liu Assoc. South Section 5">Liu Assoc. South Section 5</option>
        <option value="W Corp. L2 Cleanup Agent">W Corp. L2 Cleanup Agent</option>
        <option value="Hook Office Fixer">Hook Office Fixer</option>
        <option value="Fanghunt Office Fixer">Fanghunt Office Fixer</option>
        <option value="Tingtang Gang Gangleader">Tingtang Gang Gangleader</option>
        <option value="K Corp. Class 3 Excision Staff">K Corp. Class 3 Excision Staff</option>
        <option value="Dieci Assoc. South Section 4">Dieci Assoc. South Section 4</option>
        <option value="District 20 Yurodivy">District 20 Yurodivy</option>
        <option value="Full-Stop Office Rep">Full-Stop Office Rep</option>
        <option value="R Corp. 4th Pack Reindeer">R Corp. 4th Pack Reindeer</option>
        <option value="The Lord of Hongyuan">The Lord of Hongyuan</option>
    </select>
    <br>

    <label>Heathcliff Id: </label>
    <select name="HeathcliffId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Shi Assoc. South Section 5">Shi Assoc. South Section 5</option>
        <option value="N Corp. Kleinhammer">N Corp. Kleinhammer</option>
        <option value="Seven Assoc. South Section 4">Seven Assoc. South Section 4</option>
        <option value="Multicrack Office Fixer">Multicrack Office Fixer</option>
        <option value="R Corp. 4th Pack Rabbit">R Corp. 4th Pack Rabbit</option>
        <option value="Lobotomy E.G.O::Sunshower">Lobotomy E.G.O::Sunshower</option>
        <option value="The Pequod Harpooneer">The Pequod Harpooneer</option>
        <option value="Öufi Assoc. South Section 3">Öufi Assoc. South Section 3</option>
        <option value="Wild Hunt">Wild Hunt</option>
        <option value="Full-Stop Office Fixer">Full-Stop Office Fixer</option>
        <option value="Kurokumo Clan Wakashu">Kurokumo Clan Wakashu</option>
        <option value="W Corp. L4 Cleanup Agent - CCA">W Corp. L4 Cleanup Agent - CCA</option>
        <option value="Heishou Pack - You Branch Adept">Heishou Pack - You Branch Adept</option>
    </select>
    <br>

    <label>Ishmael Id: </label>
    <select name="IshmaelId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Shi Assoc. South Section 5">Shi Assoc. South Section 5</option>
        <option value="LCCB Assistant Manager">LCCB Assistant Manager</option>
        <option value="Lobotomy E.G.O::Sloshing">Lobotomy E.G.O::Sloshing</option>
        <option value="Edgar Family Butler">Edgar Family Butler</option>
        <option value="R Corp. 4th Pack Reindeer">R Corp. 4th Pack Reindeer</option>
        <option value="Liu Assoc. South Section 4">Liu Assoc. South Section 4</option>
        <option value="Molar Boatworks Fixer">Molar Boatworks Fixer</option>
        <option value="The Pequod Captain">The Pequod Captain</option>
        <option value="Zwei Assoc. West Section 3">Zwei Assoc. West Section 3</option>
        <option value="Kurokumo Clan Captain">Kurokumo Clan Captain</option>
        <option value="Family Hierarch Candidate">Family Hierarch Candidate</option>
        <option value="Jeongs Office Rep">Jeongs Office Rep</option>
    </select>
    <br>

    <label>Rodion Id: </label>
    <select name="RodionId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="LCCB Assistant Manager">LCCB Assistant Manager</option>
        <option value="N Corp. Mittelhammer">N Corp. Mittelhammer</option>
        <option value="Zwei Assoc. South Section 5">Zwei Assoc. South Section 5</option>
        <option value="T Corp. Class 2 Collection Staff">T Corp. Class 2 Collection Staff</option>
        <option value="Kurokumo Clan Wakashu">Kurokumo Clan Wakashu</option>
        <option value="Rosespanner Workshop Rep">Rosespanner Workshop Rep</option>
        <option value="Dieci Assoc. Section 4">Dieci Assoc. Section 4</option>
        <option value="Liu Assoc. South Section 4 Director">Liu Assoc. South Section 4 Director</option>
        <option value="Decyat assoc. North Section 3">Decyat assoc. North Section 3</option>
        <option value="The Princess of La Manchaland">The Princess of La Manchaland</option>
        <option value="Heishou Pack - Si Branch">Heishou Pack - Si Branch</option>
        <option value="Lobotomy E.G.O::The Sword Sharpened with Tears">Lobotomy E.G.O::The Sword Sharpened with Tears</option>
    </select>
    <br>

    <label>Sinclair Id: </label>
    <select name="SinclairId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Zwei Assoc. South Section 6">Zwei Assoc. South Section 6</option>
        <option value="Los Mariachis Jefe">Los Mariachis Jefe</option>
        <option value="Lobotomy E.G.O::Red Sheet">Lobotomy E.G.O::Red Sheet</option>
        <option value="Molar Boatworks Fixer">Molar Boatworks Fixer</option>
        <option value="Zwei Assoc. West Section 3">Zwei Assoc. West Section 3</option>
        <option value="Blade Lineage Salsu">Blade Lineage Salsu</option>
        <option value="The One Who Shall Grip">The One Who Shall Grip</option>
        <option value="Cinq Assoc. South Section 4 Director">Cinq Assoc. South Section 4 Director</option>
        <option value="Dawn Office Fixer">Dawn Office Fixer</option>
        <option value="Devyat Assoc. North Section 3">Devyat Assoc. North Section 3</option>
        <option value="The Middle Little Brother">The Middle Little Brother</option>
        <option value="The Thumb East Soldato II">The Thumb East Soldato II</option>
        <option value="Heishou Pack - You Branch">Heishou Pack - You Branch</option>
    </select>
    <br>

    <label>Outis Id: </label>
    <select name="OutisId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Blade Lineage Salsu">Blade Lineage Salsu</option>
        <option value="G Corp. Head Manager">G Corp. Head Manager</option>
        <option value="Cinq Assoc. South Section 4">Cinq Assoc. South Section 4</option>
        <option value="The Ring Pointillist Student">The Ring Pointillist Student</option>
        <option value="Seven Assoc. South Section 6 Director">Seven Assoc. South Section 6 Director</option>
        <option value="Molar Office Fixer">Molar Office Fixer</option>
        <option value="Lobotomy E.G.O::Magic Bullet">Lobotomy E.G.O::Magic Bullet</option>
        <option value="Wuthering Heights Chief Butler">Wuthering Heights Chief Butler</option>
        <option value="W Corp. L3 Cleanup Captain">W Corp. L3 Cleanup Captain</option>
        <option value="The Barber of La Manchaland">The Barber of La Manchaland</option>
        <option value="Heishou Pack - Mao Branch">Heishou Pack - Mao Branch</option>
        <option value="T Corp. Class 3 VDCU Staff">T Corp. Class 3 VDCU Staff</option>
    </select>
    <br>

    <label>Gregor Id: </label>
    <select name="GregorId">
        <option value=""></option>
        <option value="LCB Sinner">LCB Sinner</option>
        <option value="Liu Assoc. South Section 6">Liu Assoc. South Section 6</option>
        <option value="R.B. Sous-chef">R.B. Sous-chef</option>
        <option value="Rosespanner Workshop Fixer">Rosespanner Workshop Fixer</option>
        <option value="Kurokumo clan Captain">Kurokumo clan Captain</option>
        <option value="G Corp. Manager Corporal">G Corp. Manager Corporal</option>
        <option value="Zwei Assoc. South Section 4">Zwei Assoc. South Section 4</option>
        <option value="Twinhook Pirates First mate">Twinhook Pirates First mate</option>
        <option value="Edgar Family Heir">Edgar Family Heir</option>
        <option value="The Priest of La Manchaland">The Priest of La Manchaland</option>
        <option value="Firefist Office Survivor">Firefist Office Survivor</option>
        <option value="Heishou Pack - Si branch">Heishou Pack - Si branch</option>
        <option value="Night Awls Capitano">Night Awls Capitano</option>
    </select>
    <br>

    <input type="submit" value="Save">
</form>
