<?php

namespace SON\Util;

interface Juridica
{

	public function getTipo();
	public function getCnpj();
	public function setCnpj($cnpj);
}