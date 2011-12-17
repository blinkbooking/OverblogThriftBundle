<?php
/**
 *  @generated
 */
namespace Overblog\ThriftBundle\Model\Comment\Definition;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Exception\TException;

class CommentDeleteCommentResult extends TBase {
  static $_TSPEC;

  public $success = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'CommentDeleteCommentResult';
  }

  public function read($input)
  {
    return $this->_read('CommentDeleteCommentResult', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('CommentDeleteCommentResult', self::$_TSPEC, $output);
  }
}


