<?php
/**
 * PHPBenelux Promo Code Generator
 * 
 * @copyright PHPBenelux
 * @license Creative Commons Attribution-ShareAlike 3.0
 * @author DragonBe
 */
class PromoCode implements Countable
{
    const CODE_LENGTH = 10;
    /**
     * @var array
     */
    protected $_codes = array ();
    /**
     * Generates promo codes
     * 
     * @param int $count The amount of codes you want
     */
    public function generate($count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->addCode($this->_createCode());
        }
    }
    /**
     * Adds a code to the stack
     * 
     * @param string $code
     * @return PromoCode 
     */
    public function addCode($code)
    {
        $this->_codes[] = (string) $code;
        return $this;
    }
    /**
     * Retrieve a list of promo codes
     * 
     * @return array The list of codes
     */
    public function getCodes()
    {
        return $this->_codes;
    }
    /**
     * Counts the amount of codes in this stack
     * 
     * @return int The count of codes in this list
     */
    public function count()
    {
        return count($this->getCodes());
    }
    /**
     * Creates a single code using random characters
     * 
     * @return string
     * @access protected
     */
    protected function _createCode()
    {
        $chars = array ('A', 'B', 'C', 'D', 'E', 'F', 'G',
            'H', 'I', 'J', 'K', 'L', 'M', 'N', '0', 'P',
            'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $code = '';
        for ($i = 0; $i < self::CODE_LENGTH; $i++) {
            $code .= $chars[rand(0, count($chars) - 1)];
        }
        return $code;
    }
}