import { useState } from "react";
// import styled from "styled-components";

// react-bootstrap
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
import Input from "../components/Input";
import Select from "../components/Select";
import BigButton from "../components/BigButton";


const ChangeInformation = () => {
  const [email, setEmail] = useState("");
  const [lastName, setLastName] = useState("");
  const [givenName, setGivenName] = useState("");
  const [passportCountry, setPassportCountry] = useState("");
  const [mobileNumber, setMobileNumber] = useState("");
  const [mobileCountry, setMobileCountry] = useState("");

  const isButtonDisabled = () => {
    // 버튼 활성화 여부를 결정
    return email === "" || lastName === "" || givenName === "" || passportCountry === "" || mobileNumber === "" || mobileCountry === "";
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Change Member Information" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">

            <Form.Group className="formitem">
              <InputTitle className="input_title">Email Address</InputTitle>
              <InputGroup>
                <Input placeholder="Email" type="text" value={email} onChange={(e) => setEmail(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Last Name</InputTitle>
              <InputGroup>
              <Input placeholder="Last Name" type="text" value={lastName} onChange={(e) => setLastName(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Given Name</InputTitle>
              <InputGroup>
              <Input placeholder="Given Name" type="text" value={givenName} onChange={(e) => setGivenName(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Country</InputTitle>
              <InputGroup>
                <Select value={passportCountry} onChange={(e) => setPassportCountry(e.target.value)}>
                  <option value="">Country</option>
                  <option value="KR">Korea</option>
                  <option value="US">United States</option>
                  <option value="JP">Japan</option>
                  <option value="CN">China</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                  <option value="GB">United Kingdom</option>
                  <option value="IN">India</option>
                  <option value="BR">Brazil</option>
                  <option value="AU">Australia</option>
                </Select>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Mobile Number</InputTitle>
              <InputGroup>
              <Input placeholder="Number" type="text" value={mobileNumber} onChange={(e) => setMobileNumber(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Mobile Number Country</InputTitle>
              <InputGroup>
                <Select value={mobileCountry} onChange={(e) => setMobileCountry(e.target.value)}>
                  <option value="">Country</option>
                  <option value="KR">Korea</option>
                  <option value="US">United States</option>
                  <option value="JP">Japan</option>
                  <option value="CN">China</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                  <option value="GB">United Kingdom</option>
                  <option value="IN">India</option>
                  <option value="BR">Brazil</option>
                  <option value="AU">Australia</option>
                </Select>
              </InputGroup>
            </Form.Group>

          </Form>
        </PageContent>
        <PageBtnbox>
          <BigButton>Cancel</BigButton>
          <BigButton disabled={isButtonDisabled()}>Save For Later</BigButton>
          <BigButton disabled={isButtonDisabled()}>Confirm</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav active="profile" />
    </>
  );
};

export default ChangeInformation;
