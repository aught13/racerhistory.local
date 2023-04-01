<?php
class Model_Stat_Basket_Season_Person extends \Orm\Model {

    protected static $_properties = [
        'id',
        'team_season_roster_id',
        'GP',
        'GS',
        'MIN',
        'FGM',
        'FGA',
        'TPM',
        'TPA',
        'FTM',
        'FTA',
        'ORB',
        'DRB',
        'RB',
        'AST',
        'STL',
        'BS',
        'TRN',
        'PF',
        'TF',
        'PTS',
        'created_at',
        'updated_at',
    ];

    protected static $_observers = [
        'Orm\Observer_CreatedAt' => [
            'events' => ['before_insert'],
            'mysql_timestamp' => true,
        ],
        'Orm\Observer_UpdatedAt' => [
            'events' => ['before_save'],
            'mysql_timestamp' => true,
        ],
    ];
    
    protected static $_table_name = 'stat_basket_season_person';
    
    protected static $_belongs_to = ['team_season_roster'];

    public static function validate($factory)
    {
        $val = Validation::forge($factory);
        $val->add_field('team_season_roster_id', 'Team Season Roster Id', 'required|valid_string[numeric]');
        $val->add_field('GP', 'GP', 'valid_string[numeric]');
        $val->add_field('GS', 'GS', 'valid_string[numeric]');
        $val->add_field('MIN', 'MIN', 'valid_string[numeric]');
        $val->add_field('FGM', 'FGM', 'required|valid_string[numeric]');
        $val->add_field('FGA', 'FGA', 'valid_string[numeric]');
        $val->add_field('TPM', 'TPM', 'valid_string[numeric]');
        $val->add_field('TPA', 'TPA', 'valid_string[numeric]');
        $val->add_field('FTM', 'FTM', 'required|valid_string[numeric]');
        $val->add_field('FTA', 'FTA', 'valid_string[numeric]');
        $val->add_field('ORB', 'ORB', 'valid_string[numeric]');
        $val->add_field('DRB', 'DRB', 'valid_string[numeric]');
        $val->add_field('RB', 'RB', 'valid_string[numeric]');
        $val->add_field('AST', 'AST', 'valid_string[numeric]');
        $val->add_field('STL', 'STL', 'valid_string[numeric]');
        $val->add_field('BS', 'BS', 'valid_string[numeric]');
        $val->add_field('TRN', 'TRN', 'valid_string[numeric]');
        $val->add_field('PF', 'PF', 'valid_string[numeric]');
        $val->add_field('TF', 'TF', 'valid_string[numeric]');
        $val->add_field('PTS', 'PTS', 'required|valid_string[numeric]');

        return $val;
    }

}
