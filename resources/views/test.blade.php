<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IVY Admin Dashboard</title>
  <!-- Favicon -->
  <link href="{{ asset('/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href=" {{ asset('/vendor/bootstrap-table/css/fresh-bootstrap-table.css') }}" rel="stylesheet" />
  <!-- <link type="text/css" href=" {{ asset('/vendor/bootstrap-table/css/bootstrap.css') }}" rel="stylesheet" /> -->
  <link type="text/css" href="{{ asset('/css/argon.css?v=1.0.0') }}" rel="stylesheet">
</head>
<body>

<div class="wrapper">
    <div class="fresh-table full-screen-table">
    <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange                  
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->
        
        <div class="toolbar">
            <button id="alertBtn" class="btn btn-default">Alert</button>
        </div>
        
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="id">ID</th>
            	<th data-field="name" data-sortable="true">Name</th>
            	<th data-field="salary" data-sortable="true">Salary</th>
            	<th data-field="country" data-sortable="true">Country</th>
            	<th data-field="city">City</th>
            	<th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
            </thead>
            <tbody>
                <tr>
                	<td>1</td>
                	<td>Dakota Rice</td>
                	<td>$36,738</td>
                	<td>Niger</td>
                	<td>Oud-Turnhout</td>
                	<td></td>
                </tr>
                <tr>
                	<td>2</td>
                	<td>Minerva Hooper</td>
                	<td>$23,789</td>
                	<td>Curaçao</td>
                	<td>Sinaai-Waas</td>
                	<td></td>
                </tr>
                <tr>
                	<td>3</td>
                	<td>Sage Rodriguez</td>
                	<td>$56,142</td>
                	<td>Netherlands</td>
                	<td>Baileux</td>
                	<td></td>
                </tr>
                <tr>
                	<td>4</td>
                	<td>Philip Chaney</td>
                	<td>$38,735</td>
                	<td>Korea, South</td>
                	<td>Overland Park</td>
                	<td></td>
                </tr>
                <tr>
                	<td>5</td>
                	<td>Doris Greene</td>
                	<td>$63,542</td>
                	<td>Malawi</td>
                	<td>Feldkirchen in Kärnten</td>
                	<td></td>
                </tr>
                <tr>
                	<td>6</td>
                	<td>Mason Porter</td>
                	<td>$78,615</td>
                	<td>Chile</td>
                	<td>Gloucester</td>
                	<td></td>
                </tr>
                <tr>
                	<td>7</td>
                	<td>Alden Chen</td>
                	<td>$63,929</td>
                	<td>Finland</td>
                	<td>Gary</td>
                	<td></td>
                </tr>
                <tr>
                	<td>8</td>
                	<td>Colton Hodges</td>
                	<td>$93,961</td>
                	<td>Nicaragua</td>
                	<td>Delft</td>
                	<td></td>
                </tr>
                <tr>
                	<td>9</td>
                	<td>Illana Nelson</td>
                	<td>$56,142</td>
                	<td>Heard Island</td>
                	<td>Montone</td>
                	<td></td>
                </tr>
                <tr>
                	<td>10</td>
                	<td>Nicole Lane</td>
                	<td>$93,148</td>
                	<td>Cayman Islands</td>
                	<td>Cottbus</td>
                	<td></td>
                </tr>
                <tr>
                	<td>11</td>
                	<td>Chaim Saunders</td>
                	<td>$5,502</td>
                	<td>Romania</td>
                	<td>New Quay</td>
                	<td></td>
                </tr>
                <tr>
                	<td>12</td>
                	<td>Josiah Simon</td>
                	<td>$50,265</td>
                	<td>Christmas Island</td>
                	<td>Sint-Jans-Molenbeek</td>
                	<td></td>
                </tr>
                <tr>
                	<td>13</td>
                	<td>Ila Poole</td>
                	<td>$67,413</td>
                	<td>Montenegro</td>
                	<td>Pontevedra</td>
                	<td></td>
                </tr>
                <tr>
                	<td>14</td>
                	<td>Shana Mejia</td>
                	<td>$58,566</td>
                	<td>Afghanistan</td>
                	<td>Ballarat</td>
                	<td></td>
                </tr>
                <tr>
                	<td>15</td>
                	<td>Lana Ryan</td>
                	<td>$64,151</td>
                	<td>Martinique</td>
                	<td>Portobuffolè</td>
                	<td></td>
                </tr>
                <tr>
                	<td>16</td>
                	<td>Daquan Bender</td>
                	<td>$91,906</td>
                	<td>Sao Tome and Principe</td>
                	<td>Walhain-Saint-Paul</td>
                	<td></td>
                </tr>
                <tr>
                	<td>17</td>
                	<td>Connor Wagner</td>
                	<td>$86,537</td>
                	<td>Germany</td>
                	<td>Solihull</td>
                	<td></td>
                </tr>
                <tr>
                	<td>18</td>
                	<td>Boris Horton</td>
                	<td>$35,094</td>
                	<td>Laos</td>
                	<td>Saint-Mard</td>
                	<td></td>
                </tr>
                <tr>
                	<td>19</td>
                	<td>Winifred Ryan</td>
                	<td>$64,436</td>
                	<td>Ireland</td>
                	<td>Ronciglione</td>
                	<td></td>
                </tr>
                <tr>
                	<td>20</td>
                	<td>Tanisha Hayes</td>
                	<td>$43,670</td>
                	<td>Argentina</td>
                	<td>Lint</td>
                	<td></td>
                </tr>
                <tr>
                	<td>21</td>
                	<td>Knox Morris</td>
                	<td>$58,474</td>
                	<td>Norway</td>
                	<td>Melle</td>
                	<td></td>
                </tr>
                <tr>
                	<td>22</td>
                	<td>Idola Stephenson</td>
                	<td>$25,236</td>
                	<td>Saint Barthélemy</td>
                	<td>Joncret</td>
                	<td></td>
                </tr>
                <tr>
                	<td>23</td>
                	<td>Abra Keller</td>
                	<td>$28,272</td>
                	<td>Switzerland</td>
                	<td>Thame</td>
                	<td></td>
                </tr>
                <tr>
                	<td>24</td>
                	<td>Teagan Mcgowan</td>
                	<td>$51,059</td>
                	<td>Sudan</td>
                	<td>Stalowa Wola</td>
                	<td></td>
                </tr>
                <tr>
                	<td>25</td>
                	<td>Leandra Kirby</td>
                	<td>$89,270</td>
                	<td>Western Sahara</td>
                	<td>Oristano</td>
                	<td></td>
                </tr>
                <tr>
                	<td>26</td>
                	<td>Quentin Swanson</td>
                	<td>$64,782</td>
                	<td>Saint Vincent</td>
                	<td>Poznań</td>
                	<td></td>
                </tr>
                <tr>
                	<td>27</td>
                	<td>Naida Oneil</td>
                	<td>$52,070</td>
                	<td>Panama</td>
                	<td>Floriffoux</td>
                	<td></td>
                </tr>
                <tr>
                	<td>28</td>
                	<td>Martina Kent</td>
                	<td>$70,020</td>
                	<td>Paraguay</td>
                	<td>Leffinge</td>
                	<td></td>
                </tr>
                <tr>
                	<td>29</td>
                	<td>Bruno Wilson</td>
                	<td>$71,875</td>
                	<td>Tanzania</td>
                	<td>Oosterhout</td>
                	<td></td>
                </tr>
                <tr>
                	<td>30</td>
                	<td>Len Talley</td>
                	<td>$62,755</td>
                	<td>Barbados</td>
                	<td>Fauglia</td>
                	<td></td>
                </tr>
                <tr>
                	<td>31</td>
                	<td>Cherokee Mcclure</td>
                	<td>$39,037</td>
                	<td>United States</td>
                	<td>Pike Creek</td>
                	<td></td>
                </tr>
                <tr>
                	<td>32</td>
                	<td>Nero Harrison</td>
                	<td>$25,378</td>
                	<td>Tanzania</td>
                	<td>Portland</td>
                	<td></td>
                </tr>
                <tr>
                	<td>33</td>
                	<td>Mikayla Peters</td>
                	<td>$79,896</td>
                	<td>Heard Island</td>
                	<td>San Jose</td>
                	<td></td>
                </tr>
                <tr>
                	<td>34</td>
                	<td>Judith Mercer</td>
                	<td>$87,954</td>
                	<td>Cuba</td>
                	<td>North Vancouver</td>
                	<td></td>
                </tr>
                <tr>
                	<td>35</td>
                	<td>Rama Christensen</td>
                	<td>$74,139</td>
                	<td>Niger</td>
                	<td>Rimouski</td>
                	<td></td>
                </tr>
                <tr>
                	<td>36</td>
                	<td>Brian Carroll</td>
                	<td>$50,358</td>
                	<td>Cayman Islands</td>
                	<td>Hudson's Hope</td>
                	<td></td>
                </tr>
                <tr>
                	<td>37</td>
                	<td>Lunea Cooke</td>
                	<td>$54,123</td>
                	<td>Madagascar</td>
                	<td>Tsiigehtchic</td>
                	<td></td>
                </tr>
                <tr>
                	<td>38</td>
                	<td>Holly Bowman</td>
                	<td>$28,024</td>
                	<td>Brunei</td>
                	<td>Farrukhabad-cum-Fatehgarh</td>
                	<td></td>
                </tr>
                <tr>
                	<td>39</td>
                	<td>Evangeline Levine</td>
                	<td>$22,318</td>
                	<td>Iceland</td>
                	<td>Coassolo Torinese</td>
                	<td></td>
                </tr>
                <tr>
                	<td>40</td>
                	<td>Beck Barlow</td>
                	<td>$87,051</td>
                	<td>Hungary</td>
                	<td>Drancy</td>
                	<td></td>
                </tr>
                <tr>
                	<td>41</td>
                	<td>Sacha Dale</td>
                	<td>$52,392</td>
                	<td>Congo (Brazzaville)</td>
                	<td>Sint-Pauwels</td>
                	<td></td>
                </tr>
                <tr>
                	<td>42</td>
                	<td>Candice Norman</td>
                	<td>$69,753</td>
                	<td>Madagascar</td>
                	<td>Verrès</td>
                	<td></td>
                </tr>
                <tr>
                	<td>43</td>
                	<td>Herrod Snider</td>
                	<td>$53,181</td>
                	<td>Nigeria</td>
                	<td>Tejar</td>
                	<td></td>
                </tr>
                <tr>
                	<td>44</td>
                	<td>Kylie Weeks</td>
                	<td>$33,401</td>
                	<td>Monaco</td>
                	<td>Piancastagnaio</td>
                	<td></td>
                </tr>
                <tr>
                	<td>45</td>
                	<td>Cadman Mendez</td>
                	<td>$96,468</td>
                	<td>South Georgia</td>
                	<td>Deline</td>
                	<td></td>
                </tr>
                <tr>
                	<td>46</td>
                	<td>Teegan Robbins</td>
                	<td>$14,632</td>
                	<td>Turkmenistan</td>
                	<td>Cerchio</td>
                	<td></td>
                </tr>
                <tr>
                	<td>47</td>
                	<td>Lael Padilla</td>
                	<td>$51,409</td>
                	<td>Ghana</td>
                	<td>Biała Podlaska</td>
                	<td></td>
                </tr>
                <tr>
                	<td>48</td>
                	<td>Imogene May</td>
                	<td>$23,589</td>
                	<td>Turkmenistan</td>
                	<td>Gressan</td>
                	<td></td>
                </tr>
                <tr>
                	<td>49</td>
                	<td>Bernard Yang</td>
                	<td>$14,082</td>
                	<td>Timor-Leste</td>
                	<td>Saint-Eugene</td>
                	<td></td>
                </tr>
                <tr>
                	<td>50</td>
                	<td>Amber Gillespie</td>
                	<td>$23,133</td>
                	<td>Sao Tome and Principe</td>
                	<td>Bucharest</td>
                	<td></td>
                </tr>
                <tr>
                	<td>51</td>
                	<td>Grady Melton</td>
                	<td>$73,501</td>
                	<td>Tokelau</td>
                	<td>Colobraro</td>
                	<td></td>
                </tr>
                <tr>
                	<td>52</td>
                	<td>Rae Williams</td>
                	<td>$80,797</td>
                	<td>Sierra Leone</td>
                	<td>Merrickville-Wolford</td>
                	<td></td>
                </tr>
                <tr>
                	<td>53</td>
                	<td>Quon Tyson</td>
                	<td>$88,498</td>
                	<td>Finland</td>
                	<td>Machilipatnam</td>
                	<td></td>
                </tr>
                <tr>
                	<td>54</td>
                	<td>Xyla Sheppard</td>
                	<td>$39,462</td>
                	<td>Russian Federation</td>
                	<td>Tourinnes-Saint-Lambert</td>
                	<td></td>
                </tr>
                <tr>
                	<td>55</td>
                	<td>Lamar Branch</td>
                	<td>$71,272</td>
                	<td>Malta</td>
                	<td>Kuşadası</td>
                	<td></td>
                </tr>
                <tr>
                	<td>56</td>
                	<td>Iris Jordan</td>
                	<td>$49,642</td>
                	<td>Gambia</td>
                	<td>Finkenstein am Faaker See</td>
                	<td></td>
                </tr>
                <tr>
                	<td>57</td>
                	<td>Zeus Hicks</td>
                	<td>$10,915</td>
                	<td>Poland</td>
                	<td>Conselice</td>
                	<td></td>
                </tr>
                <tr>
                	<td>58</td>
                	<td>Rafael Luna</td>
                	<td>$41,457</td>
                	<td>Bonaire</td>
                	<td>Dibrugarh</td>
                	<td></td>
                </tr>
                <tr>
                	<td>59</td>
                	<td>Reed Rodgers</td>
                	<td>$49,797</td>
                	<td>Bahamas</td>
                	<td>Olsztyn</td>
                	<td></td>
                </tr>
                <tr>
                	<td>60</td>
                	<td>Kenneth Tyler</td>
                	<td>$33,618</td>
                	<td>Venezuela</td>
                	<td>Seilles</td>
                	<td></td>
                </tr>
                <tr>
                	<td>61</td>
                	<td>Cameron Wooten</td>
                	<td>$58,119</td>
                	<td>Saudi Arabia</td>
                	<td>Montebello sul Sangro</td>
                	<td></td>
                </tr>
                <tr>
                	<td>62</td>
                	<td>Quentin Talley</td>
                	<td>$38,465</td>
                	<td>Belize</td>
                	<td>Serralunga d'Alba</td>
                	<td></td>
                </tr>
                <tr>
                	<td>63</td>
                	<td>Petra Day</td>
                	<td>$98,804</td>
                	<td>Belarus</td>
                	<td>Bielefeld</td>
                	<td></td>
                </tr>
                <tr>
                	<td>64</td>
                	<td>Slade Brady</td>
                	<td>$10,311</td>
                	<td>Greece</td>
                	<td>Cardigan</td>
                	<td></td>
                </tr>
                <tr>
                	<td>65</td>
                	<td>Zena Parker</td>
                	<td>$65,753</td>
                	<td>Slovakia</td>
                	<td>Tirupati</td>
                	<td></td>
                </tr>
                <tr>
                	<td>66</td>
                	<td>Jordan Johns</td>
                	<td>$25,588</td>
                	<td>Sudan</td>
                	<td>Beauvechain</td>
                	<td></td>
                </tr>
                <tr>
                	<td>67</td>
                	<td>Xaviera Schmidt</td>
                	<td>$7,553</td>
                	<td>Lesotho</td>
                	<td>M�nchengladbach</td>
                	<td></td>
                </tr>
                <tr>
                	<td>68</td>
                	<td>Ferris Williams</td>
                	<td>$38,556</td>
                	<td>Kuwait</td>
                	<td>Agartala</td>
                	<td></td>
                </tr>
                <tr>
                	<td>69</td>
                	<td>Riley Smith</td>
                	<td>$92,133</td>
                	<td>Portugal</td>
                	<td>Maringá</td>
                	<td></td>
                </tr>
                <tr>
                	<td>70</td>
                	<td>Gary Gentry</td>
                	<td>$21,792</td>
                	<td>Portugal</td>
                	<td>Sint-Denijs-Westrem</td>
                	<td></td>
                </tr>
                <tr>
                	<td>71</td>
                	<td>Octavia Clemons</td>
                	<td>$57,445</td>
                	<td>Sao Tome and Principe</td>
                	<td>Bekkerzeel</td>
                	<td></td>
                </tr>
                <tr>
                	<td>72</td>
                	<td>Kareem Sharpe</td>
                	<td>$46,751</td>
                	<td>Qatar</td>
                	<td>Bromyard</td>
                	<td></td>
                </tr>
                <tr>
                	<td>73</td>
                	<td>Macon Mcgee</td>
                	<td>$74,661</td>
                	<td>Somalia</td>
                	<td>Savona</td>
                	<td></td>
                </tr>
                <tr>
                	<td>74</td>
                	<td>Austin Gamble</td>
                	<td>$90,527</td>
                	<td>Lithuania</td>
                	<td>Red Deer</td>
                	<td></td>
                </tr>
                <tr>
                	<td>75</td>
                	<td>Astra Odom</td>
                	<td>$89,223</td>
                	<td>Micronesia</td>
                	<td>Fort Providence</td>
                	<td></td>
                </tr>
                <tr>
                	<td>76</td>
                	<td>Ima Gamble</td>
                	<td>$73,044</td>
                	<td>Singapore</td>
                	<td>Koszalin</td>
                	<td></td>
                </tr>
                <tr>
                	<td>77</td>
                	<td>Tanya Herring</td>
                	<td>$96,594</td>
                	<td>Tonga</td>
                	<td>Tillet</td>
                	<td></td>
                </tr>
                <tr>
                	<td>78</td>
                	<td>Tucker Brown</td>
                	<td>$68,624</td>
                	<td>Seychelles</td>
                	<td>Hull</td>
                	<td></td>
                </tr>
                <tr>
                	<td>79</td>
                	<td>Zelda Hines</td>
                	<td>$40,699</td>
                	<td>Cameroon</td>
                	<td>Rochester</td>
                	<td></td>
                </tr>
                <tr>
                	<td>80</td>
                	<td>Elton Holden</td>
                	<td>$22,698</td>
                	<td>Samoa</td>
                	<td>Acquedolci</td>
                	<td></td>
                </tr>
                <tr>
                	<td>81</td>
                	<td>Virginia Valencia</td>
                	<td>$72,698</td>
                	<td>Algeria</td>
                	<td>Pointe-aux-Trembles</td>
                	<td></td>
                </tr>
                <tr>
                	<td>82</td>
                	<td>Mia Pratt</td>
                	<td>$47,252</td>
                	<td>Bhutan</td>
                	<td>Salt Lake City</td>
                	<td></td>
                </tr>
                <tr>
                	<td>83</td>
                	<td>Kitra Craig</td>
                	<td>$36,888</td>
                	<td>Yemen</td>
                	<td>Melville</td>
                	<td></td>
                </tr>
                <tr>
                	<td>84</td>
                	<td>Amery Spears</td>
                	<td>$62,359</td>
                	<td>Montenegro</td>
                	<td>Logroño</td>
                	<td></td>
                </tr>
                <tr>
                	<td>85</td>
                	<td>Kirk Miller</td>
                	<td>$45,812</td>
                	<td>Belize</td>
                	<td>Conca Casale</td>
                	<td></td>
                </tr>
                <tr>
                	<td>86</td>
                	<td>Elton Clayton</td>
                	<td>$23,513</td>
                	<td>Paraguay</td>
                	<td>Linton</td>
                	<td></td>
                </tr>
                <tr>
                	<td>87</td>
                	<td>Rhonda Chavez</td>
                	<td>$40,242</td>
                	<td>Korea, North</td>
                	<td>Mellery</td>
                	<td></td>
                </tr>
                <tr>
                	<td>88</td>
                	<td>Florence Tillman</td>
                	<td>$79,225</td>
                	<td>Cayman Islands</td>
                	<td>S�lange</td>
                	<td></td>
                </tr>
                <tr>
                	<td>89</td>
                	<td>Hayley Valencia</td>
                	<td>$26,047</td>
                	<td>Vanuatu</td>
                	<td>Crowsnest Pass</td>
                	<td></td>
                </tr>
                <tr>
                	<td>90</td>
                	<td>Wing Love</td>
                	<td>$72,505</td>
                	<td>Wallis and Futuna</td>
                	<td>Diadema</td>
                	<td></td>
                </tr>
                <tr>
                	<td>91</td>
                	<td>Gary Cochran</td>
                	<td>$50,642</td>
                	<td>Saint Lucia</td>
                	<td>Wilmington</td>
                	<td></td>
                </tr>
                <tr>
                	<td>92</td>
                	<td>Karleigh Cochran</td>
                	<td>$42,292</td>
                	<td>Korea, South</td>
                	<td>Newton Stewart</td>
                	<td></td>
                </tr>
                <tr>
                	<td>93</td>
                	<td>Jin Levy</td>
                	<td>$73,247</td>
                	<td>Honduras</td>
                	<td>Sudbury</td>
                	<td></td>
                </tr>
                <tr>
                	<td>94</td>
                	<td>Mari Webb</td>
                	<td>$26,412</td>
                	<td>Finland</td>
                	<td>Tarvisio</td>
                	<td></td>
                </tr>
                <tr>
                	<td>95</td>
                	<td>Jenette Roman</td>
                	<td>$15,920</td>
                	<td>France</td>
                	<td>Forbach</td>
                	<td></td>
                </tr>
                <tr>
                	<td>96</td>
                	<td>Fritz Silva</td>
                	<td>$18,512</td>
                	<td>Macedonia</td>
                	<td>Lauco</td>
                	<td></td>
                </tr>
                <tr>
                	<td>97</td>
                	<td>Rigel Mathews</td>
                	<td>$75,899</td>
                	<td>Congo</td>
                	<td>Madrid</td>
                	<td></td>
                </tr>
                <tr>
                	<td>98</td>
                	<td>Stephen Pace</td>
                	<td>$60,739</td>
                	<td>Hungary</td>
                	<td>Cinco Esquinas</td>
                	<td></td>
                </tr>
                <tr>
                	<td>99</td>
                	<td>Desiree Humphrey</td>
                	<td>$51,795</td>
                	<td>Portugal</td>
                	<td>Forst</td>
                	<td></td>
                </tr>
                <tr>
                	<td>100</td>
                	<td>Vielka Norton</td>
                	<td>$44,584</td>
                	<td>Spain</td>
                	<td>Thane</td>
                	<td></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>


</body>
<script src="{{ asset('/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('/js/argon.js?v=1.0.0') }}"></script>
  <script src="{{ asset('/vendor/bootstrap-table/js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap-table/js/bootstrap.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap-table/js/bootstrap-table.js') }}"></script>
        
    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'), 
            full_screen = false,
            window_height;
            
        $().ready(function(){
            
            window_height = $(window).height();
            table_height = window_height - 20;
            
            
            $table.bootstrapTable({
                toolbar: ".toolbar",

                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                sortable: true,
                height: table_height,
                pageSize: 25,
                pageList: [25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
            
            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);    
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
            
                }
            };
            
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
        
            
            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });    
        });
        

        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }
       
    </script>

</html>