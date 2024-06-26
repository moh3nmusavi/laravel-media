<?php
if (!function_exists('get_enum_values')){
    /**
     * get value from enum file.
     * @param array|string $data
     * @return array
     */
    function get_enum_values(array|string $data): array
    {
        $data = is_array($data) ? $data : func_get_args();
        $values = [];
        foreach ($data as $value){
            $values[] = $value->value;
        }
        return $values ;
    }
}