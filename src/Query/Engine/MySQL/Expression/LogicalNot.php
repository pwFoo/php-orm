<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RSDB\Query\Engine\MySQL\Expression;

class LogicalNot extends AbstractUnaryOperator {
    
    /**
     * @return string
     */
    protected function _operator() {
        return "NOT";
    }
    
}
