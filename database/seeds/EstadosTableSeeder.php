<?php

use App\Entities\Estado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->createEstado();
    }

    public function createEstado(){

      DB::table('estados')->insert(array (
        0 =>
        array (
            'id' => '1',
            'nome' => 'Acre',
            'sigla' => 'AC',
            'iso' => '12',
            'slug' => 'acre',
            'populacao' => '816687',
        ),
        1 =>
        array (
            'id' => '2',
            'nome' => 'Alagoas',
            'sigla' => 'AL',
            'iso' => '27',
            'slug' => 'alagoas',
            'populacao' => '3358963',
        ),
        2 =>
        array (
            'id' => '3',
            'nome' => 'Amazonas',
            'sigla' => 'AM',
            'iso' => '13',
            'slug' => 'amazonas',
            'populacao' => '4001667',
        ),
        3 =>
        array (
            'id' => '4',
            'nome' => 'Amapá',
            'sigla' => 'AP',
            'iso' => '16',
            'slug' => 'amapa',
            'populacao' => '782295',
        ),
        4 =>
        array (
            'id' => '5',
            'nome' => 'Bahia',
            'sigla' => 'BA',
            'iso' => '29',
            'slug' => 'bahia',
            'populacao' => '15276566',
        ),
        5 =>
        array (
            'id' => '6',
            'nome' => 'Ceará',
            'sigla' => 'CE',
            'iso' => '23',
            'slug' => 'ceara',
            'populacao' => '8963663',
        ),
        6 =>
        array (
            'id' => '7',
            'nome' => 'Distrito Federal',
            'sigla' => 'DF',
            'iso' => '53',
            'slug' => 'distrito-federal',
            'populacao' => '2977216',
        ),
        7 =>
        array (
            'id' => '8',
            'nome' => 'Espírito Santo',
            'sigla' => 'ES',
            'iso' => '32',
            'slug' => 'espirito-santo',
            'populacao' => '3973697',
        ),
        8 =>
        array (
            'id' => '9',
            'nome' => 'Goiás',
            'sigla' => 'GO',
            'iso' => '52',
            'slug' => 'goias',
            'populacao' => '6695855',
        ),
        9 =>
        array (
            'id' => '10',
            'nome' => 'Maranhão',
            'sigla' => 'MA',
            'iso' => '21',
            'slug' => 'maranhao',
            'populacao' => '6954036',
        ),
        10 =>
        array (
            'id' => '11',
            'nome' => 'Minas Gerais',
            'sigla' => 'MG',
            'iso' => '31',
            'slug' => 'minas-gerais',
            'populacao' => '20997560',
        ),
        11 =>
        array (
            'id' => '12',
            'nome' => 'Mato Grosso do Sul',
            'sigla' => 'MS',
            'iso' => '50',
            'slug' => 'mato-grosso-do-sul',
            'populacao' => '2682386',
        ),
        12 =>
        array (
            'id' => '13',
            'nome' => 'Mato Grosso',
            'sigla' => 'MT',
            'iso' => '51',
            'slug' => 'mato-grosso',
            'populacao' => '3305531',
        ),
        13 =>
        array (
            'id' => '14',
            'nome' => 'Pará',
            'sigla' => 'PA',
            'iso' => '15',
            'slug' => 'para',
            'populacao' => '8272724',
        ),
        14 =>
        array (
            'id' => '15',
            'nome' => 'Paraiba',
            'sigla' => 'PB',
            'iso' => '25',
            'slug' => 'paraiba',
            'populacao' => '3999415',
        ),
        15 =>
        array (
            'id' => '16',
            'nome' => 'Pernambuco',
            'sigla' => 'PE',
            'iso' => '26',
            'slug' => 'pernambuco',
            'populacao' => '9410336',
        ),
        16 =>
        array (
            'id' => '17',
            'nome' => 'Piauí',
            'sigla' => 'PI',
            'iso' => '22',
            'slug' => 'piaui',
            'populacao' => '3212180',
        ),
        17 =>
        array (
            'id' => '18',
            'nome' => 'Paraná',
            'sigla' => 'PR',
            'iso' => '41',
            'slug' => 'parana',
            'populacao' => '11242720',
        ),
        18 =>
        array (
            'id' => '19',
            'nome' => 'Rio de Janeiro',
            'sigla' => 'RJ',
            'iso' => '33',
            'slug' => 'rio-de-janeiro',
            'populacao' => '16635996',
        ),
        19 =>
        array (
            'id' => '20',
            'nome' => 'Rio Grande do Norte',
            'sigla' => 'RN',
            'iso' => '24',
            'slug' => 'rio-grande-do-norte',
            'populacao' => '3474998',
        ),
        20 =>
        array (
            'id' => '21',
            'nome' => 'Rondônia',
            'sigla' => 'RO',
            'iso' => '11',
            'slug' => 'rondonia',
            'populacao' => '1787279',
        ),
        21 =>
        array (
            'id' => '22',
            'nome' => 'Roraima',
            'sigla' => 'RR',
            'iso' => '14',
            'slug' => 'roraima',
            'populacao' => '514229',
        ),
        22 =>
        array (
            'id' => '23',
            'nome' => 'Rio Grande do Sul',
            'sigla' => 'RS',
            'iso' => '43',
            'slug' => 'rio-grande-do-sul',
            'populacao' => '11286500',
        ),
        23 =>
        array (
            'id' => '24',
            'nome' => 'Santa Catarina',
            'sigla' => 'SC',
            'iso' => '42',
            'slug' => 'santa-catarina',
            'populacao' => '6910553',
        ),
        24 =>
        array (
            'id' => '25',
            'nome' => 'Sergipe',
            'sigla' => 'SE',
            'iso' => '28',
            'slug' => 'sergipe',
            'populacao' => '2265779',
        ),
        25 =>
        array (
            'id' => '26',
            'nome' => 'São Paulo',
            'sigla' => 'SP',
            'iso' => '35',
            'slug' => 'sao-paulo',
            'populacao' => '44749699',
        ),
        26 =>
        array (
            'id' => '27',
            'nome' => 'Tocantins',
            'sigla' => 'TO',
            'iso' => '17',
            'slug' => 'tocantins',
            'populacao' => '1532902',
        ),
    ));

    }
}
