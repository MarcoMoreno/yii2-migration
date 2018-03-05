<?php

namespace bizley\migration\table;

class TableColumnBinary extends TableColumn
{
    /**
     * @param TableStructure $table
     */
    public function buildSpecificDefinition($table)
    {
        $this->definition[] = 'binary(' . ($table->generalSchema ? null : $this->length) . ')';
    }
}
