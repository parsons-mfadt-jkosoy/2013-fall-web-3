#!/bin/sh
DIRECTORY=$(cd `dirname $0` && pwd)

ALLDIRS=("./Algo2013-Michael-Kahane" "./algo_yuki" "./castelli_algo2013" "./fata_algo2013" "./griffis_algo2013" "./huang_algo2013" "./kim_algo2013" "./moore_algo2013" "./presto_algo2013" "./sanchez-duque_algo2013" "../z_schorr_algo2013" "./wenting_zhang_algo2013" "../z_algo2013_adiel_fernandez" "../z_algo2013_xujia" "../z_algo2013-owenherterich" "../z_AMarefat-2013" "../z_gus_algo2013" "../z_kielbowska_algo2013" "../z_Proano_algo2013" "../z_Shen_algo2013")

for i in ${ALLDIRS[@]}; do
	cd $DIRECTORY
	cd	$i
	echo $i
	git reset --hard
	git pull
done