<?
function mydatetime($date_value){
		if ($date_value){
			$x=substr($date_value,0,10);
			$arr=split("-",$x);
			$myformat=$arr[2]."/".$arr[1]."/".substr($arr[0], 2).substr($date_value,10,10);
		}
return $myformat;
}

function thaidatetime($date_value){
		if ($date_value){
			$x=substr($date_value,0,10);
			$arr=split("-",$x);
			$month[1]="���Ҥ�";
			$month[2]="����Ҿѹ��";
			$month[3]="�չҤ�";
			$month[4]="����¹";
			$month[5]="����Ҥ�";
			$month[6]="�Զع�¹";
			$month[7]="�á�Ҥ�";
			$month[8]="�ԧ�Ҥ�";
			$month[9]="�ѹ��¹";
			$month[10]="���Ҥ�";
			$month[11]="��Ȩԡ�¹";
			$month[12]="�ѹ�Ҥ�";
			$yyyy=$arr[0]+543;

			$myformat=number_format($arr[2])." ".$month[number_format($arr[1])]." ".$yyyy." ".number_format(substr($date_value,11,2)).substr($date_value,13,3)." �.";
		}

return $myformat;
}

function thaidate($date_value){
		if ($date_value){
			$x=substr($date_value,0,10);
			$arr=split("-",$x);
			$month[1]="���Ҥ�";
			$month[2]="����Ҿѹ��";
			$month[3]="�չҤ�";
			$month[4]="����¹";
			$month[5]="����Ҥ�";
			$month[6]="�նع�¹";
			$month[7]="�á�Ҥ�";
			$month[8]="�ԧ�Ҥ�";
			$month[9]="�ѹ��¹";
			$month[10]="���Ҥ�";
			$month[11]="��Ȩԡ�¹";
			$month[12]="�ѹ�Ҥ�";
			$yyyy=$arr[0]+543;

			$myformat=number_format($arr[2])." ".$month[number_format($arr[1])]." ".$yyyy;
		}

return $myformat;
}
?>