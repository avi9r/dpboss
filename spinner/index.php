<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- jQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
<!-- local style css -->
<link rel="stylesheet" href="bt.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<?php
session_start();
require_once('../connect.php');
if(isset($_SESSION['id'])){
	
?>

<div class="spinner-div">
	<div class="div-img">
		<img src="my-spin2.png" alt="" class="img-spin">
		<p href="#" class="value11">54</p>
	</div>
	<input type="hidden" class="u_id" value="<?php echo $_SESSION['id']; ?>">
	<div class="dot"></div>
</div>


<div class="scroll-table" style="height: 350px;overflow-y: scroll;">
	<table class="table">
		<tbody>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="00" id="num0">00</button>
					<input type="number" class="form-control"  id="selectedNum0">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="01" id="num1">01</button>
					<input type="number" class="form-control"  id="selectedNum1">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="02" id="num2">02</button>
					<input type="number" class="form-control"  id="selectedNum2">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="03" id="num3">03</button>
					<input type="number" class="form-control"  id="selectedNum3">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="04" id="num4">04</button>
					<input type="number" class="form-control"  id="selectedNum4">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="05" id="num5">05</button>
					<input type="number" class="form-control"  id="selectedNum5">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="06" id="num6">06</button>
					<input type="number" class="form-control"  id="selectedNum6">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="07" id="num7">07</button>
					<input type="number" class="form-control"  id="selectedNum7">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="08" id="num8">08</button>
					<input type="number" class="form-control"  id="selectedNum8">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="09" id="num9">09</button>
					<input type="number" class="form-control"  id="selectedNum9">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="10" id="num10">10</button>
					<input type="number" class="form-control"  id="selectedNum10">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="11" id="num11">11</button>
					<input type="number" class="form-control"  id="selectedNum11">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="12" id="num12">12</button>
					<input type="number" class="form-control"  id="selectedNum12">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="13" id="num13">13</button>
					<input type="number" class="form-control"  id="selectedNum13">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="14" id="num14">14</button>
					<input type="number" class="form-control"  id="selectedNum14">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="15" id="num15">15</button>
					<input type="number" class="form-control"  id="selectedNum15">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="16" id="num16">16</button>
					<input type="number" class="form-control"  id="selectedNum16">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="17" id="num17">17</button>
					<input type="number" class="form-control"  id="selectedNum17">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="18" id="num18">18</button>
					<input type="number" class="form-control"  id="selectedNum18">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="19" id="num19">19</button>
					<input type="number" class="form-control"  id="selectedNum19">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="20" id="num20">20</button>
					<input type="number" class="form-control"  id="selectedNum20">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="21" id="num21">21</button>
					<input type="number" class="form-control"  id="selectedNum21">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="22" id="num22">22</button>
					<input type="number" class="form-control"  id="selectedNum22">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="23" id="num23">23</button>
					<input type="number" class="form-control"  id="selectedNum23">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="24" id="num24">24</button>
					<input type="number" class="form-control"  id="selectedNum24">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="25" id="num25">25</button>
					<input type="number" class="form-control"  id="selectedNum25">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="26" id="num26">26</button>
					<input type="number" class="form-control"  id="selectedNum26">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="27" id="num27">27</button>
					<input type="number" class="form-control"  id="selectedNum27">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="28" id="num28">28</button>
					<input type="number" class="form-control"  id="selectedNum28">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="29" id="num29">29</button>
					<input type="number" class="form-control"  id="selectedNum29">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="30" id="num30">30</button>
					<input type="number" class="form-control"  id="selectedNum30">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="31" id="num31">31</button>
					<input type="number" class="form-control"  id="selectedNum31">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="32" id="num32">32</button>
					<input type="number" class="form-control"  id="selectedNum32">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="33" id="num33">33</button>
					<input type="number" class="form-control"  id="selectedNum33">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="34" id="num34">34</button>
					<input type="number" class="form-control"  id="selectedNum34">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="35" id="num35">35</button>
					<input type="number" class="form-control"  id="selectedNum35">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="36" id="num36">36</button>
					<input type="number" class="form-control"  id="selectedNum36">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="37" id="num37">37</button>
					<input type="number" class="form-control"  id="selectedNum37">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="38" id="num38">38</button>
					<input type="number" class="form-control"  id="selectedNum38">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="39" id="num39">39</button>
					<input type="number" class="form-control"  id="selectedNum39">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="40" id="num40">40</button>
					<input type="number" class="form-control"  id="selectedNum40">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="41" id="num41">41</button>
					<input type="number" class="form-control"  id="selectedNum41">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="42" id="num42">42</button>
					<input type="number" class="form-control"  id="selectedNum42">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="43" id="num43">43</button>
					<input type="number" class="form-control"  id="selectedNum43">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="44" id="num44">44</button>
					<input type="number" class="form-control"  id="selectedNum44">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="45" id="num45">45</button>
					<input type="number" class="form-control"  id="selectedNum45">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="46" id="num46">46</button>
					<input type="number" class="form-control"  id="selectedNum46">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="47" id="num47">47</button>
					<input type="number" class="form-control"  id="selectedNum47">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="48" id="num48">48</button>
					<input type="number" class="form-control"  id="selectedNum48">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="49" id="num49">49</button>
					<input type="number" class="form-control"  id="selectedNum49">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="50" id="num50">50</button>
					<input type="number" class="form-control"  id="selectedNum50">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="51" id="num51">51</button>
					<input type="number" class="form-control"  id="selectedNum51">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="52" id="num52">52</button>
					<input type="number" class="form-control"  id="selectedNum52">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="53" id="num53">53</button>
					<input type="number" class="form-control"  id="selectedNum53">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="54" id="num54">54</button>
					<input type="number" class="form-control"  id="selectedNum54">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="55" id="num55">55</button>
					<input type="number" class="form-control"  id="selectedNum55">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="56" id="num56">56</button>
					<input type="number" class="form-control"  id="selectedNum56">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="57" id="num57">57</button>
					<input type="number" class="form-control"  id="selectedNum57">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="58" id="num58">58</button>
					<input type="number" class="form-control"  id="selectedNum58">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="59" id="num59">59</button>
					<input type="number" class="form-control"  id="selectedNum59">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="60" id="num60">60</button>
					<input type="number" class="form-control"  id="selectedNum60">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="61" id="num61">61</button>
					<input type="number" class="form-control"  id="selectedNum61">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="62" id="num62">62</button>
					<input type="number" class="form-control"  id="selectedNum62">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="63" id="num63">63</button>
					<input type="number" class="form-control"  id="selectedNum63">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="64" id="num64">64</button>
					<input type="number" class="form-control"  id="selectedNum64">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="65" id="num65">65</button>
					<input type="number" class="form-control"  id="selectedNum65">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="66" id="num66">66</button>
					<input type="number" class="form-control"  id="selectedNum66">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="67" id="num67">67</button>
					<input type="number" class="form-control"  id="selectedNum67">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="68" id="num68">68</button>
					<input type="number" class="form-control"  id="selectedNum68">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="69" id="num69">69</button>
					<input type="number" class="form-control"  id="selectedNum69">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="70" id="num70">70</button>
					<input type="number" class="form-control"  id="selectedNum70">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="71" id="num71">71</button>
					<input type="number" class="form-control"  id="selectedNum71">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="72" id="num72">72</button>
					<input type="number" class="form-control"  id="selectedNum72">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="73" id="num73">73</button>
					<input type="number" class="form-control"  id="selectedNum73">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="74" id="num74">74</button>
					<input type="number" class="form-control"  id="selectedNum74">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="75" id="num75">75</button>
					<input type="number" class="form-control"  id="selectedNum75">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="76" id="num76">76</button>
					<input type="number" class="form-control"  id="selectedNum76">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="77" id="num77">77</button>
					<input type="number" class="form-control"  id="selectedNum77">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="78" id="num78">78</button>
					<input type="number" class="form-control"  id="selectedNum78">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="79" id="num79">79</button>
					<input type="number" class="form-control"  id="selectedNum79">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="80" id="num80">80</button>
					<input type="number" class="form-control"  id="selectedNum80">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="81" id="num81">81</button>
					<input type="number" class="form-control"  id="selectedNum81">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="82" id="num82">82</button>
					<input type="number" class="form-control"  id="selectedNum82">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="83" id="num83">83</button>
					<input type="number" class="form-control"  id="selectedNum83">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="84" id="num84">84</button>
					<input type="number" class="form-control"  id="selectedNum84">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="85" id="num85">85</button>
					<input type="number" class="form-control"  id="selectedNum85">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="86" id="num86">86</button>
					<input type="number" class="form-control"  id="selectedNum86">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="87" id="num87">87</button>
					<input type="number" class="form-control"  id="selectedNum87">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="88" id="num88">88</button>
					<input type="number" class="form-control"  id="selectedNum88">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="89" id="num89">89</button>
					<input type="number" class="form-control"  id="selectedNum89">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="90" id="num90">90</button>
					<input type="number" class="form-control"  id="selectedNum90">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="91" id="num91">91</button>
					<input type="number" class="form-control"  id="selectedNum91">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="92" id="num92">92</button>
					<input type="number" class="form-control"  id="selectedNum92">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="93" id="num93">93</button>
					<input type="number" class="form-control"  id="selectedNum93">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="94" id="num94">94</button>
					<input type="number" class="form-control"  id="selectedNum94">
				</td>
			</tr>
			<tr>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="95" id="num95">95</button>
					<input type="number" class="form-control"  id="selectedNum95">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="96" id="num96">96</button>
					<input type="number" class="form-control"  id="selectedNum96">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="97" id="num97">97</button>
					<input type="number" class="form-control"  id="selectedNum97">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="98" id="num98">98</button>
					<input type="number" class="form-control"  id="selectedNum98">
				</td>
				<td>
					<button type="button"  class="btn btn-primary d-block mb-1 w-100" value="99" id="num99">99</button>
					<input type="number" class="form-control"  id="selectedNum99">
				</td>
			</tr>
		</tbody>
	</table>

</div>
<br>
<div id="comment" class="container div-res" ></div>
<div><input type="button" value="SUBMIT" style="float:left;"  id='spin' class="btn btn-light btn-spin">
</div>
<?php 
}else{
	header("Location: login.php");
	
}
?>
<!-- <script src="jq.js"></script> -->
<script src="app.js"></script>
<script>
	
</script>
</body>
</html>