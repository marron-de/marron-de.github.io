import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Accordion from "react-bootstrap/Accordion";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import BigButton from "../components/BigButton";

// style
const AllCheck = styled.div`
  border-top: 1px solid var(--color-border);
  padding: 20px 0px;

  .darkMode & {
    border-top: 1px solid var(--color-gray);
  }
`;

const AllCheckButton = styled.div`
  .form-check.check_ver {
    width: 100%;
    height: 45px;
    border-radius: 8px;
    background: var(--color-input);
    box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--second-family);
    font-weight: 600;
    font-size: 16px;
    line-height: 130%;
    text-align: center;
    color: var(--color-main);
    transition: var(--transition);
    border: 2px solid var(--color-border2);
  }

  .form-check.check_ver.active {
    border-color: var(--color-main);
    background: var(--color-main);
    color: var(--color-white);
  }

  .form-check.check_ver .form-check-label {
    font-family: var(--second-family);
    font-weight: 600;
    font-size: 16px;
    color: var(--color-main);
  }

  .form-check.check_ver .form-check-input:checked + .form-check-label {
    font-weight: 600;
    color: var(--color-white);
  }

  .darkMode & .form-check.check_ver {
    border: 2px solid var(--color-default);
    background: var(--color-darkgray2);
  }

  .darkMode & .form-check.check_ver .form-check-label {
    color: var(--color-border2);
  }

  .darkMode & .form-check.check_ver.active {
    border-color: var(--color-main);
    background: var(--color-main);
    color: var(--color-white);
  }
`;

const PlanPolicies = () => {
  const [checkedTerms, setCheckedTerms] = useState({
    Term1: false,
    Term2: false,
    AllTerm: false,
  });

  const handleIndividualCheck = (e) => {
    const { name, checked } = e.target;
    setCheckedTerms((prev) => {
      const updatedTerms = {
        ...prev,
        [name]: checked,
      };
      const allChecked = updatedTerms.Term1 && updatedTerms.Term2;
      return {
        ...updatedTerms,
        AllTerm: allChecked,
      };
    });
  };

  const handleAllCheck = (e) => {
    const { checked } = e.target;
    setCheckedTerms({
      Term1: checked,
      Term2: checked,
      AllTerm: checked,
    });
  };

  const isActive = checkedTerms.AllTerm ? "active" : "";

  return (
    <>
      {/* Header */}
      <Header type="title" title="Policies" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <Accordion defaultActiveKey="0">
                <Accordion.Item eventKey="0">
                  <Accordion.Header>
                    <InputTitle className="input_title">
                      Conditions of Use <span className="required">*</span>
                    </InputTitle>
                  </Accordion.Header>
                  <Accordion.Body>
                    <div className="accordion-body-text">
                      제1조(목적) 이 약관은 ㈜고마이플랜(이하 여행사)과 여행자가 체결한 국외여행계약의 세부 이행 및 준수사항을 정함을 목적으로 합니다.
                      <br />
                      <br />
                      제2조(용어의 정의) 여행의 종류 및 정의, 해외여행수속대행업의 정의는 다음과 같습니다.
                      <br />
                      <br />
                      1. 기획여행 : 여행사가 미리 여행목적지 및 관광일정, 여행자에게 제공될 운송 및 숙식서비스 내용(이하 ‘여행서비스’라 함), 여행요금을 정하여
                      광고 또는 기타 방법으로 여행자를 모집하여 실시하는 여행.
                      <br />
                      <br />
                      2. 희망여행 : 여행자(개인 또는 단체)가 희망하는 여행조건에 따라 여행사가 운송․숙식․관광 등 여행에 관한 전반적인 계획을 수립하여 실시하는
                      여행.
                      <br />
                      <br />
                      3. 해외여행 수속대행(이하 ‘수속대행계약’이라 함) : 여행사가 여행자로부터 소정의 수속대행요금을 받기로 약정하고, 여행자의 위탁에 따라
                      다음에 열거하는 업무(이하 ‘수속대행업무’라 함)를 대행하는 것. 1) 사증, 재입국 허가 및 각종 증명서 취득에 관한 수속 <br />
                      2) 출입국 수속서류 작성 및 기타 관련업무 <br />
                    </div>
                  </Accordion.Body>
                  <InputGroup>
                    <Form.Check
                      type="checkbox"
                      name="Term1"
                      id="Term1"
                      label="Please accept the terms and conditions"
                      className="check_ver"
                      checked={checkedTerms.Term1}
                      onChange={handleIndividualCheck}
                    />
                  </InputGroup>
                </Accordion.Item>
              </Accordion>
            </Form.Group>
            <Form.Group className="formitem">
              <Accordion>
                <Accordion.Item eventKey="1">
                  <Accordion.Header>
                    <InputTitle className="input_title">
                      Privacy Policy <span className="required">*</span>
                    </InputTitle>
                  </Accordion.Header>
                  <Accordion.Body>
                    <div className="accordion-body-text">
                      제1조(목적) 이 약관은 ㈜고마이플랜(이하 여행사)과 여행자가 체결한 국외여행계약의 세부 이행 및 준수사항을 정함을 목적으로 합니다.
                      <br />
                      <br />
                      제2조(용어의 정의) 여행의 종류 및 정의, 해외여행수속대행업의 정의는 다음과 같습니다.
                      <br />
                      <br />
                      1. 기획여행 : 여행사가 미리 여행목적지 및 관광일정, 여행자에게 제공될 운송 및 숙식서비스 내용(이하 ‘여행서비스’라 함), 여행요금을 정하여
                      광고 또는 기타 방법으로 여행자를 모집하여 실시하는 여행.
                      <br />
                      <br />
                      2. 희망여행 : 여행자(개인 또는 단체)가 희망하는 여행조건에 따라 여행사가 운송․숙식․관광 등 여행에 관한 전반적인 계획을 수립하여 실시하는
                      여행.
                      <br />
                      <br />
                      3. 해외여행 수속대행(이하 ‘수속대행계약’이라 함) : 여행사가 여행자로부터 소정의 수속대행요금을 받기로 약정하고, 여행자의 위탁에 따라
                      다음에 열거하는 업무(이하 ‘수속대행업무’라 함)를 대행하는 것. 1) 사증, 재입국 허가 및 각종 증명서 취득에 관한 수속 <br />
                      2) 출입국 수속서류 작성 및 기타 관련업무 <br />
                    </div>
                  </Accordion.Body>
                  <InputGroup>
                    <Form.Check
                      type="checkbox"
                      name="Term2"
                      id="Term2"
                      label="Please accept the terms and conditions"
                      className="check_ver"
                      checked={checkedTerms.Term2}
                      onChange={handleIndividualCheck}
                    />
                  </InputGroup>
                </Accordion.Item>
              </Accordion>
            </Form.Group>
          </Form>
          <AllCheck>
            <AllCheckButton>
              <Form.Check
                type="checkbox"
                name="AllTerm"
                id="AllTerm"
                label="Agree all"
                className={`check_ver ${isActive}`}
                checked={checkedTerms.AllTerm}
                onChange={handleAllCheck}
              />
            </AllCheckButton>
          </AllCheck>
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={!checkedTerms.AllTerm}>Confirm</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav/>
    </>
  );
};

export default PlanPolicies;
