<?php
$row  = array(

	$row1 = array(
		['H', 'nometales',  1], 
		['colspan',16], 
		['He', 'gasesnobles',  18]
	),

	$row2 = array(
		['Li', 'alcalinos',  1],
		['Be', 'alcalinoterreos',  2], 
		['colspan', 10], 
		['B', 'metaloides',  13],
		['C', 'nometales',  14],
		['N', 'nometales',  15],
		['O', 'nometales',  16],
		['F', 'halogenos',  17],
		['Ne', 'gasesnobles',  18]
	),

	$row3 = array(
		['Na', 'alcalinos',  1],
		['Mg', 'alcalinoterreos',  2], 
		['colspan', 10], 
		['AI', 'otrosmetales',  13],
		['Si', 'metaloides',  14],
		['P', 'nometales', 15],
		['S', 'nometales',  16],
		['CI', 'halogenos', 17],
		['Ar', 'gasesnobles',  18]
	),
	$row3 = array(
		['K', 'alcalinos',  1],
		['Ca', 'alcalinoterreos',  2], 
		['Sc', 'metalesdetransicion',  3], 
		['Ti', 'metalesdetransicion',  4], 
		['V', 'metalesdetransicion',  5], 
		['Cr', 'metalesdetransicion',  6], 
		['Mn', 'metalesdetransicion',  7], 
		['Fe', 'metalesdetransicion',  8], 
		['Co', 'metalesdetransicion',  9], 
		['Ni', 'metalesdetransicion',  10], 
		['Cu', 'metalesdetransicion',  11], 
		['Zn', 'metalesdetransicion',  12], 
		['Ga', 'otrosmetales',  13],
		['Ge', 'metaloides',  14],
		['As', 'metaloides',  15],
		['Se', 'nometales', 16],
		['Br', 'halogenos',  17],
		['Kr', 'gasesnobles',  18]
	),

	$row4 = array(
		['Rb', 'alcalinos',  1],
		['Sr', 'alcalinoterreos',  2], 
		['Y', 'metalesdetransicion',  3], 
		['Zr', 'metalesdetransicion',  4], 
		['Nb', 'metalesdetransicion', 5], 
		['Mo', 'metalesdetransicion',  6], 
		['Tc', 'metalesdetransicion',  7], 
		['Ru', 'metalesdetransicion',  8], 
		['Rh', 'metalesdetransicion',  9], 
		['Pd', 'metalesdetransicion',  10], 
		['Ag', 'metalesdetransicion',  11], 
		['Cd', 'metalesdetransicion',  12], 
		['In', 'otrosmetales',  13],
		['Sn', 'otrosmetales',  14],
		['Sb', 'metaloides',  15],
		['Te', 'metaloides',  16],
		['I', 'halogenos',  17],
		['Xe', 'gasesnobles',  18]
	),

	$row5 = array(
		['Cs', 'alcalinos',  1],
		['Ba', 'alcalinoterreos',  2], 
		['La-Lu', 'metalesdetransicion',  3], 
		['Hf', 'metalesdetransicion',  4], 
		['Ta', 'metalesdetransicion', 5], 
		['W', 'metalesdetransicion',  6], 
		['Re', 'metalesdetransicion',  7], 
		['Os', 'metalesdetransicion',  8], 
		['Ir', 'metalesdetransicion',  9], 
		['Pt', 'metalesdetransicion',  10], 
		['Au', 'metalesdetransicion',  11], 
		['Hg', 'metalesdetransicion',  12], 
		['Ti', 'otrosmetales',  13],
		['Pb', 'otrosmetales',  14],
		['Bi', 'otrosmetales',  15],
		['Po', 'metaloides',  16],
		['At', 'halogenos',  17],
		['Rn', 'gasesnobles',  18]
	),

	$row5 = array(
		['Fr', 'alcalinos',  1],
		['Ra', 'alcalinoterreos',  2], 
		['Ac-Lr', 'metalesdetransicion',  3], 
		['Rf', 'metalesdetransicion',  4], 
		['Db', 'metalesdetransicion', 5], 
		['Sg', 'metalesdetransicion',  6], 
		['Bh', 'metalesdetransicion',  7], 
		['Hs', 'metalesdetransicion',  8], 
		['Mt', 'metalesdetransicion',  9], 
		['Ds', 'metalesdetransicion',  10], 
		['Rg', 'metalesdetransicion',  11], 
		['Cn', 'metalesdetransicion',  12], 
		['Nh', 'otrosmetales',  13],
		['Fi', 'otrosmetales',  14],
		['Mc', 'otrosmetales',  15],
		['Lv', 'otrosmetales',  16],
		['Ts', 'halogenos',  17],
		['Og', 'gasesnobles',  18]
	),
);

$none = [];
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Tabla periódica</title>
</head>
<body>

	<table>
		<tbody>
	<?php foreach($row as $rows):  ?>
		<tr>
		<?php foreach($rows as $key):  ?>
			<?php if ($key[0] == 'colspan'): ?>
				 <td colspan="<?php echo "{$key[1]}"; ?>">  
				  </td>
				  <?php else: ?>
				 <td class="<?php echo "{$key[1]}"; ?> b-d <?php if (in_array($key[2], $none)): ?> none <?php endif ?>">  
				  	<span class="<?php if (in_array($key[2], $none)): ?> none-title <?php endif ?>"><?php echo "{$key[0]}"; ?></span>
		       </td>
			<?php endif ?>
		<?php endforeach ?>
		</tr>
	<?php endforeach ?>
	 </tbody>
	</table>

</body>
</html>