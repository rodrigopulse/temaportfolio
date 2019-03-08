#!/bin/bash

usuario=""
host=""
porta=""
nometemplate=""
pastaremota=""

ssh -p $porta $usuario@$host "rm -rf $pastaremota/wp-content/themes/$nometemplate"
scp -P $porta -r wordpress/wp-content/themes/$nometemplate/ $usuario@$host:$pastaremota/wp-content/themes/$nometemplate
